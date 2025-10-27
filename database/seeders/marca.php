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
                "Nombre" => "ANDINO",
                "Estado" => false
            ],
            [
                "Codigo" => "AA9987",
                "Nombre" => "ZICA",
                "Estado" => true
            ],
            [
                "Codigo" => "WN4006",
                "Nombre" => "ACEROS AREQUIPA",
                "Estado" => true
            ],


        ]);
    }
}
