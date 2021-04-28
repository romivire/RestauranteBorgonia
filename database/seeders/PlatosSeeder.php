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
    }
}
