<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Restaurante;

class ReservaController extends Controller
 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = Reserva::all();
        
        return view('reserva.index')->with('reservas',$reservas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reserva.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $reservados=0; //variable para acumular suma de personas que hay reservadas para ese dia
        $fecha_solicitada=$request->get('fecha');
        $fechaActual = date('y-m-d');
        $dateTimestamp1 = strtotime($fechaActual);
        $dateTimestamp2 = strtotime($fecha_solicitada);
        

        $reservas= Reserva::where(function ($q) use ($fecha_solicitada) {
            $q->where('fecha', 'like', $fecha_solicitada);
        })->get();

        foreach ($reservas as $reservaObtenidas){
            $reservados+= $reservaObtenidas->cantidad_personas;
        }
        
        $personas_reserva_actual=$request->get('cantidad_personas'); //personas que pretende reservar la reserva en cuestion
        $capacidad = Restaurante::where('id','1')->first()->capacidad;

        if($dateTimestamp2 < $dateTimestamp1){
            return redirect()->route('reservas.index')->with('error','La reserva no se ha podido registrar porque la fecha es anterior a la actual');
        }
        elseif($reservados + $personas_reserva_actual > $capacidad){
            return redirect()->route('reservas.index')->with('error','La reserva no se ha podido registrar porque la totalidad del restaurante se encuentra reservada');
            }
            else{
                $reserva = new Reserva();
                $reserva->fecha = $fecha_solicitada;
                $reserva->hora = $request->get('hora');
                $reserva->cantidad_personas = $personas_reserva_actual;
                $reserva->observacion = $request->get('observacion');
                $reserva->estado='Confirmada';
                $reserva->save();
                $data=$reserva->id;
                return redirect()->route('reservas.index')->with('message','La reserva ha sido registrada correctamente. Su numero de reserva es: '.$data);
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
        $reserva = Reserva::find($id);
        return view('reserva.edit')->with('reserva',$reserva);
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
        $reserva = Reserva::find($id);
        $reservados=0; //variable para acumular suma de personas que hay reservadas para ese dia
        $fecha_solicitada=$request->get('fecha');
        $fechaActual = date('y-m-d');
        $dateTimestamp1 = strtotime($fechaActual);
        $dateTimestamp2 = strtotime($fecha_solicitada);
        
        $reservas= Reserva::where(function ($q) use ($fecha_solicitada) {
            $q->where('fecha', 'like', $fecha_solicitada);
    })->get();

        foreach ($reservas as $reservaObtenidas){
            $reservados+= $reservaObtenidas->cantidad_personas;
        }
        
        $personas_reserva_actual=$request->get('cantidad_personas'); //personas que pretende reservar la reserva en cuestion
        $capacidad = Restaurante::where('id','1')->first()->capacidad;

        if($dateTimestamp2 < $dateTimestamp1){
            return redirect()->route('reservas.index')->with('error','La reserva no se ha podido modificar porque la fecha es anterior a la actual');
        }
        elseif($reservados + $personas_reserva_actual > $capacidad){
                return redirect()->route('reservas.index')->with('error','La reserva no se ha podido modificar porque la totalidad del restaurante se encuentra reservada en la fecha indicada');
            }
            else{
                $reserva->fecha = $fecha_solicitada;
                $reserva->hora = $request->get('hora');
                $reserva->cantidad_personas = $personas_reserva_actual;
                $reserva->observacion = $request->get('observacion');
                $reserva->estado=$request->get('estado');
                $reserva->save();
                $data=$reserva->id;
                return redirect()->route('reservas.index')->with('message','La reserva ha sido modificada correctamente. Su numero de reserva es: '.$data);
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reserva = Reserva::find($id);        
        $reserva->delete();

        return redirect()->route('reservas.index');
    }
}
