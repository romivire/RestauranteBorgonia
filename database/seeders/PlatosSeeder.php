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
            'nombre' => 'Ensalada Cesar',
            'precio' => 3,
            'categoria_plato' => 'Ensalada',
            'vegetariano' => 'Si',
            'imagen' => 'plato2.jpg'
            
        ]);
        DB::table('platos')->insert([
            'nombre' => 'Goulash con Spaetzle',
            'precio' => 50,
            'categoria_plato' => 'Carne',
            'vegetariano' => 'No',
            'imagen' => 'plato5.jpg'
            
        ]);
        DB::table('platos')->insert([
            'nombre' => 'Panqueques con dulce de leche',
            'precio' => 50,
            'categoria_plato' => 'Postre',
            'vegetariano' => 'Si',
            'imagen' => 'plato6.jpg'
            
        ]);
        DB::table('platos')->insert([
            'nombre' => 'Milanesa napolitana',
            'precio' => 70,
            'categoria_plato' => 'Carne',
            'vegetariano' => 'No',
            'imagen' => 'plato4.jpg'
            
        ]);
        DB::table('platos')->insert([
            'nombre' => 'Cazuela de mariscos',
            'precio' => 100,
            'categoria_plato' => 'Pescado',
            'vegetariano' => 'Si',
            'imagen' => 'plato3.jpg'
            
        ]);
        DB::table('platos')->insert([
            'nombre' => 'Bruschettas',
            'precio' => 65,
            'categoria_plato' => 'Ensalada',
            'vegetariano' => 'Si',
            'imagen' => 'plato1.jpg'
            
        ]);
        DB::table('platos')->insert([
            'nombre' => 'Ravioles con salsa bolognesa',
            'precio' => 50,
            'categoria_plato' => 'Pasta',
            'vegetariano' => 'No',
            'imagen' => 'plato7.jpg'
            
        ]);
    }
}
