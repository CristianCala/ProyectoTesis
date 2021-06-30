<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;
class EquipoController extends Controller
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
            Equipo::with([
                'tipo_equipos',
                'departamentos',
                'modelos',
                'marcas',
            ])->orderBy('id', 'asc')
        )->tojson();
         }
     
         public function store(Request $request)
         {
                //Funcion Store
         /*Esta funcion nos permite hacer las form requests para almacenar datos o bien validarlos
         Se emplea la funcion validate paraque estos sean validados sin inconvenientes
         */ 
         $request->validate([
            'eq_serial' => 'required|integer|digits:6',
            'eq_nbiennacional' => 'required|integer|min:1|digits:5',
            'eq_estatus' => 'required|accepted'
        ]);

    $equipment = new Equipo;
       $equipment->modelos_mdl_id = $request->modelos_mdl_id;
       $equipment->marcas_mar_id = $request->marcas_mar_id;
       $equipment->eq_serial = $request->eq_serial;
       $equipment->eq_tequid = $request->eq_tequid;
       $equipment->eq_nbiennacional = $request->eq_nbiennacional;
       $equipment->departamentos_dep_id = $request->departamentos_dep_id;
        $equipment->eq_estatus = $request->eq_estatus;
         $equipment->save();
         }
     
         public function update(Request $request, $id)
         {
            $equipment=Equipo::findOrFail($id);
            $equipment->modelos_mdl_id = $request->modelos_mdl_id;
            $equipment->marcas_mar_id = $request->marcas_mar_id;
            $equipment->eq_serial = $request->eq_serial;
            $equipment->eq_tequid = $request->eq_tequid;
            $equipment->eq_nbiennacional = $request->eq_nbiennacional;
            $equipment->departamentos_dep_id = $request->departamentos_dep_id;
             $equipment->eq_estatus = $request->eq_estatus;
             $equipment->save();
         }
         
         public function destroy($id)
         {
            $equipment = Equipo::find($id);
            $equipment->delete();
            return $equipment; 
         }
}
