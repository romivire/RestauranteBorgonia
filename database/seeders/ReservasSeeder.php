<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservas')->insert([
            'fecha' => '2021-04-10',
            'hora' => '19:00:00',
            'cantidad_personas' => 3
        ]);
        DB::table('reservas')->insert([
            'fecha' => '2021-04-10',
            'hora' => '21:00:00',
            'cantidad_personas' => 3,
            'observacion' => 'Una mesa afuera, por favor.'
        ]);
    }
}
