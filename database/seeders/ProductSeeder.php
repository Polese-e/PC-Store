<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');

    // Truncate the products table
    DB::table('products')->truncate();
    DB::table('product_categories')->truncate(); // Adicionado para limpar a tabela pivot

    DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    // Inserir produtos
    $product1 = Product::create([
        'name' => 'Monitor Gamer SuperFrame Precision, 27 Pol, Curvo, Quad HD, 124.4% sRGB, FreeSync/G-Sync, 1ms, 165Hz, HDMI/DP, SFV2701G',
        'price' => 3171.04,
        'have_discount' => 1,
        'discount_price' => 1299.90,
        'discount_percentage' => 52,
        'image' => 'f270ab0018af33155d9cf7f703533d67.webp',
    ]);

    $product2 = Product::create([
        'name' => 'Placa de Vídeo ASRock Radeon RX 6600 Challenger D, 8GB, GDDR6, FSR, Ray Tracing, 90-GA2RZZ-00UANF',
        'price' => 2119.00,
        'have_discount' => 1,
        'discount_price' => 1399.90,
        'discount_percentage' => 22,
        'image' => '40bffa4347bc54ad8b1e684a95a2c3d8.jpg',
    ]);

    $product3 = Product::create([
        'name' => 'Placa de Vídeo Asus Dual NVIDIA GeForce RTX 4060 EVO OC, 8GB, GDDR6, DLSS, Ray Tracing, DUAL-RTX4060-O8G-EVO',
        'price' => 3269.90,
        'have_discount' => 1,
        'discount_price' => 2029.90,
        'discount_percentage' => 27,
        'image' => 'a32d029808e281f6abb79a08a9d6f012.jpg',
    ]);

    $product4 = Product::create([
        'name' => 'Memória DDR4 Kingston Fury SuperFrame, RGB, 8GB, 3200Mhz, Black, KF432C16BB2A/8DP1',
        'price' => 329.90,
        'have_discount' => 1,
        'discount_price' => 179.99,
        'discount_percentage' => 36,
        'image' => 'memória.jpg',
    ]);

    $product5 = Product::create([
        'name' => 'Placa Mãe Gigabyte B550M AORUS Elite, Chipset B550, AMD AM4, mATX, DDR4',
        'price' => 1499.90,
        'have_discount' => 1,
        'discount_price' => 829.90,
        'discount_percentage' => 35,
        'image' => 'placa-mae-gigabyte-b550m-aorus-elite-chipset-b550-amd-am4-atx-ddr4_110070.webp',
    ]);

    $product6 = Product::create([
        'name' => 'Teclado Óptico Redragon Surara Pro RGB, Switch Blue, White, ABNT, K582W-RGB-PRO (PT-BLUE)',
        'price' => 539.90,
        'have_discount' => 1,
        'discount_price' => 249.90,
        'discount_percentage' => 46,
        'image' => 'teclado-optico-redragon-surara-pro-rgb-switch-blue-white-abnt-k582w-rgb-pro-pt-blue_140617.jpg',
    ]);

    $product1->categories()->attach(8);
    $product2->categories()->attach(3);
    $product3->categories()->attach(3);
    $product4->categories()->attach(3);
    $product5->categories()->attach(3);
    $product6->categories()->attach(4);
}

}
