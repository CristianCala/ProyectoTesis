<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PrestamoEquipo;
use App\Models\Equipo;
class PrestamoEquipoController extends Controller
{
            //Constructor Auth
        /*Este constructor se encarga de que las rutas sean seguras.
         no se puedan acceder por el link si el usuario no esta registrados*/ 
    public function __construct()
    {
        $this->middleware('auth');
    }

 
    public function index()
    {
          //Funcion Index
    /*Esta funcion nos permite traer las vistas y mostrar los datos en pantalla.
    Tambien se pueden manejar consultas query como por ejemplo los Joins para relacionar tablas
    Por ejemplo "PrestamoEquipo::Join()", Tambien para generar variables que muestran los datos de una tabla
    */ 
    return datatables()->eloquent(
        PrestamoEquipo::with([
            'users',
            'equipos',
        ])->orderBy('id', 'asc')
    )->tojson();
    }

    public function store(Request $request)
    {
           //Funcion Store
    /*Esta funcion nos permite hacer las form requests para almacenar datos o bien validarlos
    Se emplea la funcion validate paraque estos sean validados sin inconvenientes
    */ 
    $prestamos = new PrestamoEquipo;
    $prestamos->pres_salida = $request->pres_salida;
    $prestamos->pres_fecha_salida = $request->pres_fecha_salida;
    $prestamos->pres_fecha_entrada = $request->pres_fecha_entrada;
    $prestamos->pres_estatus = $request->pres_estatus;
    $prestamos->usuarios_us_id = $request->usuarios_us_id;
    $prestamos->equipos_eq_id = $request->equipos_eq_id;
    $prestamos->save();
    }

    public function update(Request $request, $id)
    {
        $prestamos=PrestamoEquipo::find($id);
        $prestamos->pres_salida = $request->pres_salida;
        $prestamos->pres_fecha_salida = $request->pres_fecha_salida;
        $prestamos->pres_fecha_entrada = $request->pres_fecha_entrada;
        $prestamos->pres_estatus = $request->pres_estatus;
        $prestamos->usuarios_us_id = $request->usuarios_us_id;
        $prestamos->equipos_eq_id = $request->equipos_eq_id;
          $prestamos->save();
    }
    
    public function destroy($id)
    {
        $prestamos = PrestamoEquipo::find($id);
        $prestamos->delete();
        return $prestamos; 
    }
    public function selector()
    {
        $users=User::all();
        $id=Equipo::all()->pluck('id');
       return view('admin.prestamos.index', compact('users','id'));
       /*$datos['departamentos'] = Departamento::get();
       $datos['tipoEquipo'] = TipoEquipo::get();    
       $datos['marca'] = Marca::get();
       $datos['modelos'] = Modelo::get();
       return view('admin.equipos.index', $datos);*/
    }
}
