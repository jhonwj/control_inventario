<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            perfil::class,
            almacen::class,
            user::class,
            categoria::class,
            marca::class,
            modelo::class,
            producto::class
        ]);
    }
}
