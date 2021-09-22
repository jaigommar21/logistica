<?php

namespace App\Http\Controllers;

use App\Models\Transportista;
use Illuminate\Http\Request;

class TransportistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transportistas = Transportista::all(); 
        //return $transportista; //returns the fetched posts
        return view('transportista.index', [
            'transportistas' => $transportistas,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transportista.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transportista = Transportista::create([
            'codigo' => $request->codigo,
            'descripcion' => $request->descripcion,
            'empresa_id' => 1,
            'usuario_id' => 1
        ]);

        return redirect('transportista/'.$transportista->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transportista  $transportista
     * @return \Illuminate\Http\Response
     */
    public function show(Transportista $transportista)
    {
        //return $transportista; 
        return view('transportista.show', [
            'transportista' => $transportista,
        ]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transportista  $transportista
     * @return \Illuminate\Http\Response
     */
    public function edit(Transportista $transportista)
    {
        return view('transportista.edit', [
            'transportista' => $transportista,
            ]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transportista  $transportista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transportista $transportista)
    {
        $transportista->update([
            'codigo' => $request->codigo,
            'descripcion' => $request->descripcion,
        ]);

        return redirect('transportista/'.$transportista->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transportista  $transportista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transportista $transportista)
    {
        $transportista->delete();

        return redirect('/transportista');
    }
}
