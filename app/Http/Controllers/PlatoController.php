<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plato;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();

        if(is_null($user))
            return view('plato.index')->with('platos',$platos);
        else
            return view('plato.adminIndex')->with('platos',$platos);
            
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
        $platos->categoria_plato = $request->get('categoria');
        $platos->precio = $request->get('precio');
        $platos->vegetariano = $request->get('vegetariano');

        if($imagen=$request->file('imagen')){

           $nombre_imagen=$imagen->getClientOriginalName();
           $imagen->move(public_path("img"),$nombre_imagen); 
           $cod=pg_escape_bytea($nombre_imagen);
           $platos->imagen=$cod;         
        
        }

        $platos->save();

        return redirect()->route('platos.index')->with('message','El plato ha sido registrado correctamente.');
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
        $plato->categoria_plato = $request->get('categoria');
        $plato->precio = $request->get('precio');
        $plato->vegetariano = $request->get('vegetariano');
        
        if($imagen=$request->file('imagen')){
            
            $nombre_imagen=$imagen->getClientOriginalName();
            $imagen->move(public_path("img"),$nombre_imagen); 
            $cod=pg_escape_bytea($nombre_imagen);
            $plato->imagen=$cod;         
        
        }

        $plato->save();

        return redirect()->route('platos.index')->with('message','El plato ha sido modificado correctamente');
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
