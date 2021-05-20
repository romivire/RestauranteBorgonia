<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class Plato extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $string='null';
        if ($imagen=$this->imagen){
            $bytea=stream_get_contents($imagen);
            $string=pg_unescape_bytea($bytea);
        }
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'categoria' => $this->categoria_plato,
            'precio' => $this->precio,
            'vegetariano' => $this->vegetariano,
            'imagen' => $string,
        ];
    }
}