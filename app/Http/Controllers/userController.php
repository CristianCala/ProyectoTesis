<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
            //Constructor Auth
        /*Este constructor se encarga de que las rutas sean seguras.
         no se puedan acceder por el link si el usuario no esta registrados*/ 
         public function __construct()
         {
             $this->middleware('auth');
         }
     
      
         public function index(Request $request)
         {
               //Funcion Index
         /*Esta funcion nos permite traer las vistas y mostrar los datos en pantalla.
         Tambien se pueden manejar consultas query como por ejemplo los Joins para relacionar tablas
         Por ejemplo "PrestamoEquipo::Join()", Tambien para generar variables que muestran los datos de una tabla
         */ 
                $users=User::all();
        $users = User::paginate(10);
        return view('admin.usuarios.index', compact('users'));
         }
     
         public function store(Request $request)
         {
                //Funcion Store
         /*Esta funcion nos permite hacer las form requests para almacenar datos o bien validarlos
         Se emplea la funcion validate paraque estos sean validados sin inconvenientes
         */ 
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
         
         public function destroy($id)
         {
             # code...
         }
}
