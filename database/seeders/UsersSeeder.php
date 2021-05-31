<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('Admin1234'),
        ]);
        $admin = User::where('name', 'Admin')->first();
        $admin->assignRole('admin');

        DB::table('users')->insert([
            'name' => 'Editor',
            'email' => 'editor@gmail.com',
            'password' => bcrypt('Editor1234'),
        ]);

        $editor = User::where('name', 'Editor')->first();
        $editor->assignRole('editor');
    }
}
