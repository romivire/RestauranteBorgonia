<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plato;

class PlatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platos = Plato::all();
        return view('plato.index')->with('platos',$platos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plato.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $platos = new Plato();
        $platos->nombre = $request->get('nombre');
        $platos->tipo_plato = $request->get('tipo');
        $platos->categoria_plato = $request->get('categoria');
        $platos->precio = $request->get('precio');
        $platos->vegetariano = $request->get('vegetariano');
        $platos->imagen = $request->get('imagen');
        $platos->save();

        return redirect()->route('platos.index');
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
        $plato = Plato::find($id);
         return view('plato.edit')->with('plato',$plato);
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
        $plato = Plato::find($id);
        $plato->nombre = $request->get('nombre');
        $plato->tipo_plato = $request->get('tipo');
        $plato->categoria_plato = $request->get('categoria');
        $plato->precio = $request->get('precio');
        $plato->vegetariano = $request->get('vegetariano');
        $plato->imagen = $request->get('imagen');
        $plato->save();

        return redirect()->route('platos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plato = Plato::find($id);        
        $plato->delete();

        return redirect()->route('platos.index');
    }
}
