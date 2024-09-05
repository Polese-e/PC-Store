<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::truncate();

        Product::insert([
            ['name' => 'Monitor Gamer SuperFrame Precision, 27 Pol, Curvo, Quad HD, 124.4% sRGB, FreeSync/G-Sync, 1ms, 165Hz, HDMI/DP, SFV2701G', 'price'=> 3171.04, 'have_discount' => 1, 'discount_price' => 1299.90, 'discount_percentage' => 52, 'image' => 'f270ab0018af33155d9cf7f703533d67.webp'],
        ]);
    }
}
