<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class modelo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modelo')->insert([

            [
                "Codigo" => "NZ4558",
                "Nombre" => "Spencer Inc",
                "Estado" => true
            ],
            [
                "Codigo" => "WN9691",
                "Nombre" => "Mosciski, Schiller and Abbott",
                "Estado" => false
            ],
            [
                "Codigo" => "IB2927",
                "Nombre" => "Lehner LLC",
                "Estado" => true
            ],
            [
                "Codigo" => "SK7157",
                "Nombre" => "Bins-Spencer",
                "Estado" => true
            ],
            [
                "Codigo" => "IB5239",
                "Nombre" => "Grimes-Hagenes",
                "Estado" => true
            ],
            [
                "Codigo" => "IB9152",
                "Nombre" => "Grady Group",
                "Estado" => true
            ],
            [
                "Codigo" => "AC1726",
                "Nombre" => "Skiles, Hermiston and Abshire",
                "Estado" => true
            ],
            [
                "Codigo" => "AA1583",
                "Nombre" => "Vandervort-Hodkiewicz",
                "Estado" => false
            ],
            [
                "Codigo" => "EK8611",
                "Nombre" => "Schimmel-Langworth",
                "Estado" => false
            ],
            [
                "Codigo" => "CX1682",
                "Nombre" => "Cronin-Hermann",
                "Estado" => false
            ]

        ]);
    }
}
