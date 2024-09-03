<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Truncate tabelas
        DB::table('categories')->truncate();

        // Reabilitar checagem de chaves estrangeiras
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Category::insert([
            ["id" => 1,"title" => "Kit Upgrade","image"=> "kit-upgrade.webp"],
            ["id" => 2,"title" => "PC Gamer","image"=> "pc-gamer.webp"],
            ["id" => 3,"title" => "Hardware","image"=> "hardware.jpg"],
            ["id" => 4,"title" => "Periféricos","image"=> "--perifericos.png"],
            ["id" => 5,"title" => "Gabinete","image"=> "gabinetes.webp"],
            ["id" => 6,"title" => "Notebooks","image"=> "notebookforce.png"],
            ["id" => 7,"title" => "Refrigeração","image"=> "-refrigeracao.webp"],
            ["id" => 8,"title" => "Monitor Gamer","image"=> "-monitor.png"],
            ["id" => 9,"title" => "Cadeira Gamer","image"=> "cadeira-gamer.jpg"],
            ["id" => 10,"title" => "Mesa Gamer","image"=> "mesa-gamer.jpg"],
            ["id" => 11,"title" => "Smartphone","image"=> "smartphone.jpg"],
            ["id" => 12,"title" => "Rede e Internet","image"=> "rede-e-internet.jpg"],
        ]);
    }
}
