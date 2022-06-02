<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 2.06. Создаем Роль в Сидере
        $stuff = Role::create(['name' => 'Stuff']);
        $manager = Role::create(['name' => 'Manager']);
        $headOfDepartment = Role::create(['name' => 'Head of Department']);
        $CEO = Role::create(['name' => 'CEO']);

        // Разрешение может быть привязано к Роли двумя способами
        // 1. На роли вызываем метод givePermissionTo (передаем конкретное разрешение)
        // $role->givePermissionTo($permission);
        // 2. На разрешении вызываем метод assignRole (передаем конкретную роль)
        // $permission->assignRole($role);

        // МНОЖЕСТВО разрешений к одной Роли (и наоборот) можно привязать двумя способами
        // 1. К роли вызываем метод syncPermission (передаем конкретные разрешения)
        // $role->syncPermissions($permissions);
        // 2. К разрешению вызываем меотд syncRoles (передаем конкретные роли)
        // $permission->syncRoles($roles);

        // УДАЛИТЬ разрешение у роли (и наоборот) можно двумя способами
        // $role->revokePermissionTo($permission);
        // $permission->removeRole($role);

    }
}
