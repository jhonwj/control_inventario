<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class producto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(('producto'))->insert([
            [
                "IdMarca" => 3,
                "IdCategoria" => 1,
                "IdModelo" => 1,
                "Codigo" => "AM9767",
                "Nombre" => "CEMENTO ANDINO 49 KG",
                "PrecioC" => 36.34,
                "PrecioV" => 84.02,
                "Estado" => false
            ],
            [
                "IdMarca" => 3,
                "IdCategoria" => 2,
                "IdModelo" => 2,
                "Codigo" => "SA4317",
                "Nombre" => "CLAVO",
                "PrecioC" => 35.53,
                "PrecioV" => 23.05,
                "Estado" => false
            ],
            [
                "IdMarca" => 2,
                "IdCategoria" => 1,
                "IdModelo" => 3,
                "Codigo" => "SK9544",
                "Nombre" => "FIERRO DE 1/2",
                "PrecioC" => 30.77,
                "PrecioV" => 91.85,
                "Estado" => true
            ],
            [
                "IdMarca" => 2,
                "IdCategoria" => 5,
                "IdModelo" => 4,
                "Codigo" => "NZ1689",
                "Nombre" => "PEGAMENTO ZICA 500ML",
                "PrecioC" => 56.77,
                "PrecioV" => 61.57,
                "Estado" => true
            ],
        ]);
    }
}
