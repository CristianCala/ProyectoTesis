<?php

namespace App\Http\Controllers;
use App\Models\Equipo;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class EquiposController extends Controller
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
        $equipos=Equipo::all();
        $equipos = Equipo::paginate(10);
        return view('admin.equipment.index', compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        $equipos=Equipo::all();
        return view('admin.equipment.create', compact('equipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $equipos = new Equipo;
        $equipos->eq_modelo = $request->eq_modelo;
        $equipos->eq_marca = $request->eq_marca;
        $equipos->eq_serial = $request->eq_serial;
        $equipos->eq_nbiennacional = $request->eq_nbiennacional;
         $equipos->eq_estatus = $request->eq_estatus;
            if ($equipos->save()) {
        return redirect('/admin/equipment');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
   /* public function exportInvoice()
    {
     $equipos=App\Models\Equipo::get();
     $pdf = PDF::loadView('admin.pdf.invoice', compact('equipos') );
     return $pdf->download('invoice.pdf');
     //return view('admin.pdf.invoice', compact('equipos'));
    }*/
}
