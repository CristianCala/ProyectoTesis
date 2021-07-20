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
        $users=User::all();
        return view('config/index');
    }
    public function show()
    {
        return view('config/ayuda');
    }
    public function store(Request $request)
    {
       $users=User::all();
       $users=new User;
       $users->nombre = $request->nombre;
       $users->apellido = $request->apellido;
       $users->cedula = $request->cedula;
       $users->usuario = $request->usuario;
       $users->email = $request->email;
       $users->save();
    }

    public function update(Request $request)
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
