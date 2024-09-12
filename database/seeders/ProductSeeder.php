<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // Truncar la tabla products
        DB::table('products')->truncate();

        // Activar verificación de claves foráneas
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        Product::insert([
            ['name' => 'Monitor Gamer SuperFrame Precision, 27 Pol, Curvo, Quad HD, 124.4% sRGB, FreeSync/G-Sync, 1ms, 165Hz, HDMI/DP, SFV2701G', 'price'=> 3171.04, 'have_discount' => 1, 'discount_price' => 1299.90, 'discount_percentage' => 52, 'image' => 'f270ab0018af33155d9cf7f703533d67.webp'],
            ['name' => 'Placa de Vídeo ASRock Radeon RX 6600 Challenger D, 8GB, GDDR6, FSR, Ray Tracing, 90-GA2RZZ-00UANF', 'price'=> 2119.00, 'have_discount' => 1, 'discount_price' => 1399.90, 'discount_percentage' => 22, 'image' => '40bffa4347bc54ad8b1e684a95a2c3d8.jpg'],
        ]);
    }
}
