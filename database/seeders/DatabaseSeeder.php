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

        // 2.06. Вызываем Сидеры с ролями и админом
        $this->call(RoleSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(PermissionSeeder::class);
    }
}
