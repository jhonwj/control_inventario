<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert([
            [
                "Codigo" => "SQ8822",
                "Nombre" => "Boehm-Bayer",
                "Estado" => true
            ],
            [
                "Codigo" => "AI1195",
                "Nombre" => "Spinka-Hackett",
                "Estado" => true
            ],
            [
                "Codigo" => "KL3740",
                "Nombre" => "HERRAMIENTAS",
                "Estado" => false
            ],
            [
                "Codigo" => "QR4953",
                "Nombre" => "CEMENTOS",
                "Estado" => true
            ],
            [
                "Codigo" => "WN7861",
                "Nombre" => "MATERIALES",
                "Estado" => true
            ],
            [
                "Codigo" => "SQ9982",
                "Nombre" => "FIERROS",
                "Estado" => true
            ],
           

        ]);
    }
}
