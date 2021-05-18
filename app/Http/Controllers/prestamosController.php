<?php

namespace App\Http\Controllers;
use App\Models\PrestamoEquipo;
use App\Models\User;
use App\Models\Equipo;
use Illuminate\Http\Request;

class PrestamosController extends Controller
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
        $prestamos = PrestamoEquipo::paginate(10);
       $prestamos['prestamo']=PrestamoEquipo::JOIN("equipos","equipos.id","=","prestamo_equipos.equipos_eq_id")
                                    -> JOIN("users","users.id","=","prestamo_equipos.usuarios_us_id")
                                    -> orderBy('prestamo_equipos.id', 'asc')
                                    -> paginate(8); 
            return view('admin.prestamos.index', $prestamos );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    $users=User::all();
    $id=Equipo::all()->pluck('id');
    return view('admin.prestamos.create', compact('users', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $prestamos = new PrestamoEquipo;
       $prestamos->pres_salida = $request->pres_salida;
       $prestamos->pres_fecha_salida = $request->pres_fecha_salida;
       $prestamos->pres_fecha_entrada = $request->pres_fecha_entrada;
       $prestamos->pres_estatus = $request->pres_estatus;
       $prestamos->usuarios_us_id = $request->usuarios_us_id;
       $prestamos->equipos_eq_id = $request->equipos_eq_id;

       if ($prestamos->save()) {
           
       return redirect('/admin/prestamos');
       } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $prestamos=PrestamoEquipo::findOrFail($id);
   return view('admin.prestamos.edit', compact('prestamos'/*, 'users', 'tequid'*/));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $prestamos=PrestamoEquipo::findOrFail($id);
    $users=User::all()->pluck('user');
    $tequid=Equipos::all()->pluck('eq_id');
    return view('admin.prestamos.edit', compact('prestamos', 'users', 'tequid'));
    }
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
  $prestamos=PrestamoEquipo::findOrFail($pres_id);
       $prestamos->pres_salida = $request->pres_salida;
       $prestamos->pres_fecha_salida = $request->pres_fecha_salida;
       $prestamos->pres_fecha_entrada = $request->pres_fecha_entrada;
       $prestamos->pres_estatus = $request->pres_estatus;
       $prestamos->usuarios_us_id = $request->usuarios_us_id;
       $prestamos->equipos_eq_id = $request->equipos_eq_id;

           if ($prestamos->save()) {
           
       return redirect('/admin/prestamos');
       } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PrestamoEquipo::destroy($id);
      return back();
    }
}
