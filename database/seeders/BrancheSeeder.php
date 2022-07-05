<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrancheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $branches = array('Управление', 'Департамент развития', 'Бухгалтерия');

        foreach ($branches as $branch){
            DB::table('users')->insert([
                'name' => $branch,
                'email' => null,
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'place_id' => null,
                'pid'=> null,
                'stpid'=> null,
                'tags' => null,
                'description' => null,
                'title' => null,
                'img' => null
            ]);
        }

        $subBranches = array('Сеть кафе', 'Доставка', 'Отдел IT');
        foreach ($subBranches as $subBranch){
            DB::table('users')->insert([
                'name' => $subBranch,
                'email' => null,
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'place_id' => null,
                'pid'=> 1,
                'stpid'=> null,
                'tags' => null,
                'description' => null,
                'title' => null,
                'img' => null
            ]);
        }

    }
}
