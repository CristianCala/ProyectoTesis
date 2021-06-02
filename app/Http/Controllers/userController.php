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
        'name' => 'required|max:24',
        'email' => 'required|max:24',
        'password' => 'required|max:24'
        //'eq_nbiennacional' => 'required|integer|min:1|digits:5',
        //'eq_estatus' => 'required|accepted'
            ]);

        $users = new User;
        $users->name = $request->name;
        //$users->surname = $request->surname;
        //$users->cedula = $request->cedula;
        //$users->user = $request->user;
        $users->email = $request->email;
        //$users->estatus = $request->estatus;
        //$users->photos = $nombre;
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

        $users->name = $request->name;
        //$users->surname = $request->surname;
       //$users->cedula = $request->cedula;
        //$users->user = $request->user;
        $users->email = $request->email;
           //$users->estatus = $request->estatus;
        /*if ($users->password != null) {
        $users->password = $request->password;
        }*/
        //$users->syncRoles($request->rol);
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
