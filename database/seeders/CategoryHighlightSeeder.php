<?php

namespace Database\Seeders;

use App\Models\CategoryHighlight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryHighlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        CategoryHighlight::truncate();

        CategoryHighlight::insert([
            ['category_id' => 2, 'title' => 'T-CUSTOM', 'subtitle' => 'Monte seu PC', 'image' => 'pc-t-custom.png', 'label' => 'CUSTOM'],
            ['category_id' => 2, 'title' => 'T-GAMER', 'subtitle' => 'Domine o jogo', 'image' => 'pc-t-gamer.png', 'label' => 'GAMER'],
            ['category_id' => 2, 'title' => 'T-MOBA', 'subtitle' => 'Seja o campeão', 'image' => 'pc-t-moba.png', 'label' => 'MOBA'],
            ['category_id' => 2, 'title' => 'T-HOME', 'subtitle' => 'Trabalho e Estudo', 'image' => 'pc-t-home.png', 'label' => 'HOME'],
        ]);
    }
}
