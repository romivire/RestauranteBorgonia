<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('platos')->insert([
            'nombre' => 'Ensalada rusa',
            'tipo_plato' => 'ensalada',
            'precio' => 3,
            'categoria_plato' => 'entrada',
            'vegetariano' => 1,
            'imagen' => 'imagen a completar'
        ]);
        DB::table('platos')->insert([
            'nombre' => 'Bife de lomo a la portuguesa',
            'tipo_plato' => 'carne',
            'precio' => 50,
            'categoria_plato' => 'principal',
            'vegetariano' => 0,
            'imagen' => 'imagen a completar'
        ]);
        DB::table('platos')->insert([
            'nombre' => 'Panqueques con dulce de leche',
            'tipo_plato' => 'postre',
            'precio' => 50,
            'categoria_plato' => 'postre',
            'vegetariano' => 0,
            'imagen' => 'imagen a completar'
        ]);
    }
}
