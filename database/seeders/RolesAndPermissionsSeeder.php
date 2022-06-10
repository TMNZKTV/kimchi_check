<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;


class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 8.06. Dependency injection


        // Обнуляем закэшированные роли и права
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Создаем права
        Permission::create(['guard_name' => 'web', 'name' => 'Создать чек-лист']);
        Permission::create(['guard_name' => 'web', 'name' => 'Удалить чек-лист']);
        Permission::create(['guard_name' => 'web', 'name' => 'Обновить чек-лист']);
        Permission::create(['guard_name' => 'web', 'name' => 'Просмотреть чек-лист']);
        Permission::create(['guard_name' => 'web', 'name' => 'Отложить чек-лист']);
        Permission::create(['guard_name' => 'web', 'name' => 'Передать чек-лист']);


        // Создаем роли
        $ceoRole = Role::create(['guard_name' => 'web', 'name' => 'Управляющий'])->givePermissionTo('Создать чек-лист', 'Обновить чек-лист', 'Просмотреть чек-лист', 'Удалить чек-лист');
        $managerRole = Role::create(['guard_name' => 'web', 'name' => 'Менеджер'])->givePermissionTo('Создать чек-лист', 'Обновить чек-лист', 'Просмотреть чек-лист');
        $stuff = Role::create(['guard_name' => 'web', 'name' => 'Бармен']);
        $kitchen = Role::create(['guard_name' => 'web', 'name' => 'Персонал кухни']);
        $host = Role::create(['guard_name' => 'web', 'name' => 'Хост']);
        $waiter = Role::create(['guard_name' => 'web', 'name' => 'Официант']);
        $cook = Role::create(['guard_name' => 'web', 'name' => 'Повар']);


        // Создаем роль Супер Админа, который получит все права через Gate::before
        $superAdminRole = Role::create(['guard_name' => 'web', 'name' => 'Super Admin']);

        // Создаем Админа и присваиваем роль Супер Админа
        $admin = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole($superAdminRole);


        // Создаем CEO, присваиваем роль и даем конкретные права Юзеру (не роли)
        $user1 = \App\Models\User::factory()->create([
            'name' => 'Тумэн',
            'email' => 'ceo@example.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole($ceoRole)->givePermissionTo('Создать чек-лист', 'Обновить чек-лист', 'Просмотреть чек-лист', 'Удалить чек-лист');

        // Создаем Менеджера, присваиваем роль и даем конкретные права Юзеру (не роли)
        $user2 = \App\Models\User::factory()->create([
            'name' => 'Петр',
            'email' => 'pyotr@test.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole($managerRole);
        //->givePermissionTo('Create checklist', 'Update checklist', 'View checklist');
    }
}
