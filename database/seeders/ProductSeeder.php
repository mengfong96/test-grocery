<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => "100 Plus Can - Original (325ml)",
            'image_path' => 'https://www.dropee.com/product_uploads/photos/0d2668533bc097897b93e4b85b12db6cc68714a1.jpg',
            'desc' => "Isotonic beverage",
            'overview' => "100plus is a brand of isotonic sports drink manufactured by Fraser and Neave Limited, a global food and beverage conglomerate headquartered in Singapore. It was created and launched in 1983 in both Malaysia and Singapore with the name commemorates 100 years of Fraser and Neave in Asia.",
            'product_category_id' => 1,
        ]);
    }
}
