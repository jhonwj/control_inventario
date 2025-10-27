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
                "email" => "ophetel@gmail.com",
                "Dni" => '44617352',
                "name" => "Streak",
                "ApellidoP" => "Zurita",
                "ApellidoM" => "Ramirez",
                "Telefono" => "3975625825",
                'password' => '651656516',
                "Estado" => true
            ],
            [
                "email" => "jstreak0@mysql.com",
                "Dni" => '14191812',
                "name" => "Streak",
                "ApellidoP" => "Female",
                "ApellidoM" => "Belgica",
                "Telefono" => "Alemania",
                'password' => '651656516',
                "Estado" => true
            ],
            [
                "email" => "cmerwede1@joomla.org",
                "Dni" => '76072053',
                "name" => "Merwede",
                "ApellidoP" => "Rosau",
                "ApellidoM" => "Smith",
                "Telefono" => "1785451449",
                'password' => 'wqdwdqd',
                "Estado" => false
            ],
            [
                "email" => "ccallendar2@cdc.gov",
                "Dni" => '16227889',
                "name" => "Callendar",
                "ApellidoP" => "Genderfluid",
                "ApellidoM" => "Sdnvow",
                "Telefono" => "4691403604",
                'password' => 'dwqdwqdqwdw',
                "Estado" => false
            ]
        ]);
    }
}
