<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $places = array('Марата', 'Горная', 'Байкальская (ТЦ Цветной Парк)', 'Солнечный (Доставка)');

        foreach ($places as $place){
            DB::table('places')->insert([
                'name' => $place,
            ]);
        }
    }
}
