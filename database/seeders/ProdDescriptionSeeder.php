<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('prod_descriptions')->insert([
        ['title' => 'Modelo', 'content' => 'Overtake - Sem Fan', 'order' => 1, 'product_id' => 1],
        ['title' => 'Cor', 'content' => 'Preto', 'order' => 2, 'product_id' => 1],
        ['title' => 'Tipo', 'content' => 'Mid Tower', 'order' => 3, 'product_id' => 1],
    ]);
}
}
