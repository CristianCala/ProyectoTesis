<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;

class DepartamentoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $departamentos=Departamento::all();
        $departamentos = Departamento::paginate(10);
        return view('admin.departamentos.index', compact('departamentos'));
    }
}
