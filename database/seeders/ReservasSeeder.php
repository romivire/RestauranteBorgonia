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
            'cantidad_personas' => 3,
            'estado' => 'Confirmada'
        ]);
        DB::table('reservas')->insert([
            'fecha' => '2021-04-10',
            'hora' => '21:00:00',
            'cantidad_personas' => 3,
            'observacion' => 'Una mesa afuera, por favor.',
            'estado' => 'Confirmada'
        ]);
        DB::table('reservas')->insert([
            'fecha' => '2021-04-15',
            'hora' => '21:00:00',
            'cantidad_personas' => 10,
            'observacion' => 'Una mesa adentro.',
            'estado' => 'Confirmada'
        ]);
        DB::table('reservas')->insert([
            'fecha' => '2021-04-15',
            'hora' => '19:00:00',
            'cantidad_personas' => 22,
            'observacion' => 'Queremos varias mesas juntas.',
            'estado' => 'Confirmada'
        ]);
    }
}
