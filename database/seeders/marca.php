<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class marca extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marca')->insert([

            [
                "Codigo" => "DL6641",
                "Nombre" => "Marks Inc",
                "Estado" => false
            ],
            [
                "Codigo" => "AA9987",
                "Nombre" => "Conn LLC",
                "Estado" => true
            ],
            [
                "Codigo" => "WN4006",
                "Nombre" => "Olson Inc",
                "Estado" => true
            ],
            [
                "Codigo" => "AV8569",
                "Nombre" => "Swaniawski, Rosenbaum and Rodriguez",
                "Estado" => false
            ],
            [
                "Codigo" => "ET3932",
                "Nombre" => "Johnston, Ebert and McGlynn",
                "Estado" => true
            ],
            [
                "Codigo" => "LA9967",
                "Nombre" => "Kulas, Walter and Kovacek",
                "Estado" => true
            ],
            [
                "Codigo" => "DL9163",
                "Nombre" => "Huels, Russel and Jones",
                "Estado" => true
            ],
            [
                "Codigo" => "NZ5754",
                "Nombre" => "Zemlak Inc",
                "Estado" => false
            ],
            [
                "Codigo" => "AA2833",
                "Nombre" => "Emmerich-Larkin",
                "Estado" => true
            ],
            [
                "Codigo" => "SQ2917",
                "Nombre" => "Thompson, Nicolas and Bahringer",
                "Estado" => true
            ]

        ]);
    }
}
