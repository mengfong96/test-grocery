<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroceryListProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('grocerylist_products')->insert([
        //     'grocerylist_id' => 1,
        //     'product_id' => 1,
        //     'quantity' => 2,
        // ]);
        // DB::table('grocerylist_products')->insert([
        //     'grocerylist_id' => 1,
        //     'product_id' => 2,
        //     'quantity' => 3,
        // ]);
        DB::table('grocerylist_products')->insert([
            'grocerylist_id' => 2,
            'product_id' => 1,
            'quantity' => 5,
        ]);
        DB::table('grocerylist_products')->insert([
            'grocerylist_id' => 3,
            'product_id' => 1,
            'quantity' => 2,
        ]);
    }
}
