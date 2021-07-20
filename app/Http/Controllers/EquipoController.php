<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Models\Departamento;
use App\Models\TipoEquipo;
use Illuminate\Support\Facades\DB;
use App\Models\Modelo;
use Illuminate\Database\Eloquent\Model;

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
         $equipment->eq_marca = $request->eq_marca;
         $equipment->eq_modelo = $request->eq_modelo;
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
            $equipment->eq_marca = $request->eq_marca;
            $equipment->eq_modelo = $request->eq_modelo;
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
         public function selectAnidado()
         {
            $departamentos=Departamento::all()->pluck('dep_nombre', 'dep_id');
            $tipoEquipo=TipoEquipo::all()->pluck('teq_nombre', 'teq_id');    
            //$marcas = DB::table("marcas")->pluck("mar_nombre","id");
            return view('admin.equipos.index', compact('tipoEquipo', 'departamentos'));
            /*$datos['departamentos'] = Departamento::get();
            $datos['tipoEquipo'] = TipoEquipo::get();    
            $datos['marca'] = Marca::get();
            $datos['modelos'] = Modelo::get();
            return view('admin.equipos.index', $datos);*
         }
         /*public function getModelo(Request $request)
         {
            $modelos = DB::table("modelos")
            ->where("marca_mar_id",$request->modelos)
            ->pluck("mdl_nombre","id");
            return response()->json($modelos);
         }*/
      }
}

/**/