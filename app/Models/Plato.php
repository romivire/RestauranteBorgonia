<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    protected $fillable = [
        'nombre',
        'tipo_plato',
        'precio',
        'categoria_plato',
        'vegetariano',
        'imagen',
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
