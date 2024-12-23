<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                "create_at" => now(),
                "update_at" => now()
            ]
        ];
    }
}
