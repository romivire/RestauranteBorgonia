<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Plato;
use App\Models\Reserva;
use App\Http\Resources\Plato as PlatoResource;
use App\Http\Resources\Reserva as ReservaResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/platos', function () {
    return PlatoResource::collection(Plato::paginate(6));
});

Route::get('/reservas/{id}/edit', function ($id) {
    return new ReservaResource(Reserva::find($id));
});

Route::post('/reservas/{id}', function (Request $request) {
    $reserva = Reserva::find($request->id);
    
    if($request->cantidad_personas != null)
        $reserva->cantidad_personas = $request->cantidad_personas;
    
    if($request->fecha != null)
        $reserva->fecha = $request->fecha;

    if($request->hora != null)
        $reserva->hora = $request->hora;
    
    if($request->observacion != null)
        $reserva->observacion = $request->observacion;

    $reserva->save();

    return new ReservaResource($reserva);
});

