<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class perfil extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perfil_usuario')->insert([

            [
                "Codigo" => "01",
                "Name" => "Administrador",
                "Descripcion" => "Administrador",
                "Estado" => false
            ],
            [
                "Codigo" => "02",
                "Name" => "Asistente Administrador",
                "Descripcion" => "Asistente Administrador",
                "Estado" => false
            ],
            [
                "Codigo" => "03",
                "Name" => "Asistente Logistico",
                "Descripcion" => "Asistente Logistico",
                "Estado" => false
            ],
        ]);
    }
}
