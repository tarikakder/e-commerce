<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductModel;
use App\Models\ProductDetailModel;
use Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        ProductModel::truncate();
        ProductDetailModel::truncate();

        for($i=0; $i>30; $i++){

            $product_name=$faker->sentence(2);

            ProductModel::create([
                'product_name'=>$product_name,
                'slug'=>str_slug($product_name),
                'product_description'=>$faker->sentence(20),
                'product_amount'=>$faker->randomFloat(3,1,20)
            ]);

            $detail=$product->detail()->create([
                'show_slider'=>rand(0,1),
            'show_good_day'=>rand(0,1),
            'show_featured'=>rand(0,1),
            'show_bestseller'=>rand(0,1),
            'show_discount'=>rand(0,1)
            ]);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
