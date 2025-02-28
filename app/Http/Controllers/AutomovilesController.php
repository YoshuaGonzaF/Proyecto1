<?php

namespace App\Http\Controllers;

use App\Models\Automoviles;
use Illuminate\Http\Request;

class AutomovilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $automoviles = Automoviles::all();
        return view('automoviles', ['automoviles' => $automoviles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('automovilesCrearEditar', ['automovil' => null]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $automovil2 = new Automoviles($request->all());
        $automovil2->save();
        return redirect()->route('automoviles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Automoviles $automovil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $automovil = Automoviles::find($id);
        return view('automovilesCrearEditar', ['automovil' => $automovil]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $automovil = Automoviles::find($id);
        $automovil->update($request->all());
        return redirect()->route('automoviles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $automovil = Automoviles::find($id);
        $automovil->delete();
        return redirect()->route('automoviles.index');
    }
}
