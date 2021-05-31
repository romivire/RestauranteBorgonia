<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        
        Permission::create(['name' => 'create plato']);
        Permission::create(['name' => 'update plato']);
        Permission::create(['name' => 'delete plato']);
        Permission::create(['name' => 'view reservas']);
        Permission::create(['name' => 'update restaurante']);
        Permission::create(['name' => 'update user']);

        Role::create(['name' => 'editor'])
            ->givePermissionTo([
                'create plato',
                'update plato',
                'delete plato',
                'view reservas',
                'update restaurante',
            ]);

        Role::create(['name' => 'admin'])
            ->givePermissionTo(Permission::all());

    }
}
