<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class ConfigController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('config/index');
    }
    public function show()
    {
        return view('config/ayuda');
    }
    public function editarPerfil(Request $request, $id)
    {
       $users=User::findOrFail($id);
       $users->nombre = $request->nombre;
       $users->apellido = $request->apellido;
       $users->cedula = $request->cedula;
       $users->usuario = $request->usuario;
       $users->email = $request->email;
       $users->save();
    }
}
