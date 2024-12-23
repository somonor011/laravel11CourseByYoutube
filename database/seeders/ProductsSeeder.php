<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                "name" => "iphon 13 pro",
                "price" => 600,
                "qty" => 10,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "iphon 11",
                "price" => 400,
                "qty" => 5,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Oppo F10",
                "price" => 500,
                "qty" => 6,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Xiaomi",
                "price" => 200,
                "qty" => 10,
                "created_at" => now(),
                "updated_at" => now()
            ]
        ];

        // write code for insert to database

        DB::table("products")->insert($products);
    }
}
