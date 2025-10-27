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
                "Nombre" => "Pfannerstill-Rau",
                "Estado" => false
            ],
            [
                "Codigo" => "QR4953",
                "Nombre" => "Beer Inc",
                "Estado" => true
            ],
            [
                "Codigo" => "WN7861",
                "Nombre" => "Bernhard LLC",
                "Estado" => true
            ],
            [
                "Codigo" => "SQ9982",
                "Nombre" => "Maggio-Walsh",
                "Estado" => true
            ],
            [
                "Codigo" => "AV5598",
                "Nombre" => "Quitzon, Walsh and Ankunding",
                "Estado" => true
            ],
            [
                "Codigo" => "SA1768",
                "Nombre" => "Olson and Sons",
                "Estado" => true
            ],
            [
                "Codigo" => "CX2556",
                "Nombre" => "Spencer-Zulauf",
                "Estado" => false
            ],
            [
                "Codigo" => "AZ6701",
                "Nombre" => "Rohan-Mraz",
                "Estado" => true
            ]

        ]);
    }
}
