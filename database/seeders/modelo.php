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
                "Nombre" => "fht",
                "Estado" => false
            ],
            [
                "Codigo" => "IB2927",
                "Nombre" => "Lehner",
                "Estado" => true
            ],
            [
                "Codigo" => "SK7157",
                "Nombre" => "f00588",
                "Estado" => true
            ],
            [
                "Codigo" => "IB5239",
                "Nombre" => "gty",
                "Estado" => true
            ],
            
        ]);
    }
}
