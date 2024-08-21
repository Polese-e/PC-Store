<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banner::insert([
            ['image' => 'img/main-slider/slide1.jpg', 'order' => 1],
            ['image' => 'img/main-slider/slide2.jpg', 'order' => 2],
            ['image' => 'img/main-slider/slide3.jpg', 'order' => 3],
            ['image' => 'img/main-slider/slide4.jpg', 'order' => 4],
            ['image' => 'img/main-slider/slide5.jpg', 'order' => 5],
            ['image' => 'img/main-slider/slide6.jpg', 'order' => 6],
            ['image' => 'img/main-slider/slide7.jpg', 'order' => 7],
        ]);
    }
}
