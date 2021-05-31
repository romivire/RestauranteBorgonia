<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = [
        'fecha',
        'hora',
        'cantidad_personas',
        'observacion',
        'estado'
    ];
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
