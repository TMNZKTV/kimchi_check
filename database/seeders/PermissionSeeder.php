<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Создаем Разрешения
        $completeTask = Permission::create(['name' => 'complete task']);
        $failTask = Permission::create(['name' => 'fail task']);
        $holdTask = Permission::create(['name' => 'hold task']);
        $passTask = Permission::create(['name' => 'pass task']);
        $viewCheckList = Permission::create(['name' => 'view check-list']);
        $editCheckList = Permission::create(['name' => 'edit check-list']);
        $createCheckList = Permission::create(['name' => 'create check-list']);
        $deleteCheckList = Permission::create(['name' => 'delete check-list']);
    }
}
