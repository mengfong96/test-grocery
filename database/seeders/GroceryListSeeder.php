<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroceryListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grocerylists')->insert([
            'user_id' => 1,
            'user_pax' => 2,
            'meal_num' => 1,
        ]);
        DB::table('grocerylists')->insert([
            'user_id' => 2,
            'user_pax' => 2,
            'meal_num' => 2,
        ]);
        DB::table('grocerylists')->insert([
            'user_id' => 3,
            'user_pax' => 2,
            'meal_num' => 1,
        ]);

    }
}
