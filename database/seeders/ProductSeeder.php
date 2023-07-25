<?php

namespace Database\Seeders;

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
        //
        DB::table('products')->insert([
            [
                'name'=>'Milk',
                "price"=>"70",
                "description"=>"The Best Quality Milk",
                "category"=>"milk",
                "gallery"=>"https://uzhavarbumi.com/images/products/milk.jpg"
            ],
            [
                'name'=>'Honey',
                "price"=>"400",
                "description"=>"The Best Quality Honey",
                "category"=>"Honey",
                "gallery"=>"https://uzhavarbumi.com/images/products/honey.jpg"
            ],
            [
                'name'=>'Palkova',
                "price"=>"500",
                "description"=>"The Best Milk Product Palkova",
                "category"=>"Palkova",
                "gallery"=>"https://uzhavarbumi.com/images/products/palkova.jpg"
            ],
            [
                'name'=>'Egg',
                "price"=>"200",
                "description"=>"The best Omega 3 enriched eggs",
                "category"=>"egg",
                "gallery"=>"https://uzhavarbumi.com/images/products/eggs.jpg"
            ],
             [
                'name'=>'Gee',
                "price"=>"200",
                "description"=>"The best Gee",
                "category"=>"Gee",
                "gallery"=>"https://uzhavarbumi.com/images/products/ghee.jpg"
             ]
        ]);
    }
}