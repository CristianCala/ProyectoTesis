<?php

namespace App\Http\Controllers;
use App\Models\Equipo;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
class listController extends Controller
{
     public function equiposInvoice()
    {
     /*$equipos=Equipo::all();
     return view('admin.pdf.invoice', compact('equipos'));*/
    }
    public function exportInvoice()
    {

     $equipos=Equipo::all();
     $pdf = PDF::loadView('admin.pdf.invoice', compact('equipos') );
     return $pdf->download('invoice.pdf');
    }
}
