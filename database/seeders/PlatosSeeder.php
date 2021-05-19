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
            'precio' => 3,
            'categoria_plato' => 'Ensalada',
            'vegetariano' => 'Si'
            
        ]);
        DB::table('platos')->insert([
            'nombre' => 'Bife de lomo a la portuguesa',
            'precio' => 50,
            'categoria_plato' => 'Carne',
            'vegetariano' => 'No'
            
        ]);
        DB::table('platos')->insert([
            'nombre' => 'Panqueques con dulce de leche',
            'precio' => 50,
            'categoria_plato' => 'Postre',
            'vegetariano' => 'No'
            
        ]);
    }
}
