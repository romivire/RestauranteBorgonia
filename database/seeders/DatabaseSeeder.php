<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RolePermissionSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(RestauranteSeeder::class);
        $this->call(ReservasSeeder::class);
        $this->call(PlatosSeeder::class);
        
    }
}
