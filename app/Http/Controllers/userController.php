<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users=User::all();
        $users = User::paginate(10);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        return view('admin.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([    
        'nombre' => 'required|max:24',
        'apellido' => 'required|max:24',
        'cedula' => 'required|max:24',
        'email' => 'required|max:35',
        'usuario' => 'required|max:24',
        'estatus' => 'required|accepted',
        'password' => 'required|max:24'
            ]);

        $users = new User;
        $users->nombre = $request->nombre;
        $users->apellido = $request->apellido;
       $users->cedula = $request->cedula;
        $users->usuario = $request->usuario;
        $users->email = $request->email;
        $users->estatus = $request->estatus;
        $users->password = bcrypt($request->password);
        $users->save();
        /*if ($users->save()) {
         //$users->assignRole($request->rol);
        return redirect('/admin/users');
        }*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users=User::findOrFail($id);
        //$roles=Rol::all()->pluck('id', 'rol_tipo');
       return view('admin.users.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users=User::findOrFail($id);

        $users->nombre = $request->nombre;
        $users->apellido = $request->apellido;
       $users->cedula = $request->cedula;
        $users->usuario = $request->usuario;
        $users->email = $request->email;
        $users->estatus = $request->estatus;
        $users->password = bcrypt($request->password);
        $users->save();
     }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
