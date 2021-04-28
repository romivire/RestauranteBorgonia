<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestauranteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurantes')->insert([
            'nombre' => 'La Borgonia',
            'ubicacion' => 'Avenida Alem 2563 - Bahia Blanca',
            'capacidad' => 50
        ]);
    }
}
