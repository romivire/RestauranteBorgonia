<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class Reserva extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       
        return [
            'id' => $this->id,
            'fecha' => $this->fecha,
            'hora' => $this->hora,
            'cantidad personas' => $this->cantidad_personas,
            'observacion' => $this->observacion,
        ];
    }
}