<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productcategories')->insert([
            'name' => 'Beverages'
          ]);
        DB::table('productcategories')->insert([
            'name' => 'Bakery & Breakfast'
        ]);
        DB::table('productcategories')->insert([
            'name' => 'Canned Goods & Soups'
        ]);
        DB::table('productcategories')->insert([
            'name' => 'Condiments/Spices & Bake'
        ]);
        DB::table('productcategories')->insert([
            'name' => 'Cookies, Snacks & Candy'
        ]);
        DB::table('productcategories')->insert([
            'name' => 'Dairy, Eggs & Cheese'
        ]);
        DB::table('productcategories')->insert([
            'name' => 'Frozen Foods'
        ]);
        DB::table('productcategories')->insert([
            'name' => 'Fruits & Vegetables'
        ]);
        DB::table('productcategories')->insert([
            'name' => 'Grains, Pasta & Sides'
        ]);
        DB::table('productcategories')->insert([
            'name' => 'Meat & Seafood'
        ]);
    }
}
