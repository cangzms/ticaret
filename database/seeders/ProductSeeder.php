<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            "name"=>"Iphone 12",
            "price"=>"200",
            "description"=>"4gb ram a13 bionic cpu",
            "category"=>"Mobile",
            "gallery"=>"https://www.apple.com/newsroom/images/product/iphone/geo/apple_iphone-12_new-design_geo_10132020_big.jpg.large.jpg"

        ]);
    }
}
