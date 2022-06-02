<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        Permission::create(['name' => 'create-users']);
        Permission::create(['name' => 'edit-users']);
        Permission::create(['name' => 'delete-users']);

        $ceoRole = Role::create(['name' => 'CEO']);
        $headOfDepartmentRole = Role::create(['name' => 'Head of Department']);
        $managerRole = Role::create(['name' => 'Manager']);
        $stuffRole = Role::create(['name' => 'Stuff']);

        $ceoRole->givePermissionTo([
            'create-users',
            'edit-users',
            'delete-users',
        ]);
    }
}
