<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class almacen extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('almacen')->insert([
            [
                "Codigo" => "Parrnell",
                "Nombre" => "Barbie",
                "Direccion" => "17th Floor",
                "CapacidadTotal" => 191,
                "CapacidadUtilizada" => 272,
                "TipoAlmacen" => '1',
                "Responsable" => "Parrnell Manklow",
                "TelefonoContacto" => "518-810-4646",
                "TelefonoContacto2" => "314-116-0024",
                "CorreoContacto" => "pmanklow0@flavors.me",
                "Estado" => true
            ],
            [
                "Codigo" => "Hobart",
                "Nombre" => "Kira",
                "Direccion" => "Room 949",
                "CapacidadTotal" => 739,
                "CapacidadUtilizada" => 156,
                "TipoAlmacen" => '0',
                "Responsable" => "Hobart Bras",
                "TelefonoContacto" => "663-900-2443",
                "TelefonoContacto2" => "768-173-5702",
                "CorreoContacto" => "hbras1@pagesperso-orange.fr",
                "Estado" => true
            ],
            [
                "Codigo" => "Agosto",
                "Nombre" => "Derick",
                "Direccion" => "Apt 1781",
                "CapacidadTotal" => 652,
                "CapacidadUtilizada" => 619,
                "TipoAlmacen" => '1',
                "Responsable" => "Agosto Chinnock",
                "TelefonoContacto" => "914-865-5811",
                "TelefonoContacto2" => "291-395-6335",
                "CorreoContacto" => "achinnock2@wordpress.org",
                "Estado" => true
            ],
            [
                "Codigo" => "Delmor",
                "Nombre" => "Ardisj",
                "Direccion" => "Room 1596",
                "CapacidadTotal" => 340,
                "CapacidadUtilizada" => 313,
                "TipoAlmacen" => '0',
                "Responsable" => "Delmor Alonso",
                "TelefonoContacto" => "876-121-7728",
                "TelefonoContacto2" => "885-405-3868",
                "CorreoContacto" => "dalonso3@nhs.uk",
                "Estado" => true
            ],
            [
                "Codigo" => "Hayden",
                "Nombre" => "Waiter",
                "Direccion" => "Suite 53",
                "CapacidadTotal" => 300,
                "CapacidadUtilizada" => 343,
                "TipoAlmacen" => '0',
                "Responsable" => "Hayden Guerola",
                "TelefonoContacto" => "938-541-1942",
                "TelefonoContacto2" => "819-325-1114",
                "CorreoContacto" => "hguerola4@wufoo.com",
                "Estado" => true
            ]
        ]);
    }
}
