<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                "email" => "jhonmedrano@gmail.com",
                "Dni" => '44617352',
                "name" => "jhon",
                "ApellidoP" => "Medrano",
                "ApellidoM" => "Martinez",
                "Telefono" => "99999999",
                'password' => 'jhon2025',
                "Estado" => true
            ],
            [
                "email" => "alejandro@gmail.com",
                "Dni" => '14191812',
                "name" => "alejandro",
                "ApellidoP" => "mares",
                "ApellidoM" => "Belgica",
                "Telefono" => "Alemania",
                'password' => '651656516',
                "Estado" => true
            ],
            [
                "email" => "ricardo@gmail.com",
                "Dni" => '76072053',
                "name" => "Ricardo",
                "ApellidoP" => "Rosau",
                "ApellidoM" => "Smith",
                "Telefono" => "1785451449",
                'password' => 'wqdwdqd',
                "Estado" => false
            ],
           
        ]);
    }
}
