<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    }

    public function store(Request $request)
    {
           //Funcion Store
    /*Esta funcion nos permite hacer las form requests para almacenar datos o bien validarlos
    Se emplea la funcion validate paraque estos sean validados sin inconvenientes
    */ 
    }

    public function update(Request $request, $id)
    {
        # code...
    }
    
    public function destroy($id)
    {
        # code...
    }
}
