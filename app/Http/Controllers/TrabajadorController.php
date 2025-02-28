<?php

namespace App\Http\Controllers;

use App\Models\Trabajador;
use Illuminate\Http\Request;

class TrabajadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $trabajadores = Trabajador::all();
        return view('trabajadores', ['trabajadores' => $trabajadores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('TrabajadoresCrearEditar',['trabajador'=>null]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $trabajador2 = new Trabajador($request->all());
       $trabajador2->save();
       return redirect()->route('trabajadores.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Trabajador $trabajador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $trabajador = Trabajador::find($id);
        return view('TrabajadoresCrearEditar',['trabajador'=>$trabajador]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
       $trabajador = Trabajador::find($id);
       $trabajador->update($request->all());
       return redirect()->route('trabajadores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trabajador $trabajador, $id)
    {
        $trabajador = Trabajador::find($id);
        $trabajador->delete();
        return redirect()->route('trabajadores.index');
        //
    }
}
