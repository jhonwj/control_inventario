<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('IdMarca')->constrained('marca');
            $table->foreignId('IdCategoria')->constrained('categoria');
            $table->foreignId('IdModelo')->constrained('modelo');
            $table->string('Codigo');
            $table->string('Nombre');
            $table->float('PrecioC');
            $table->float('PrecioV');
            $table->boolean('Estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
