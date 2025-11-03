<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmacenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacen', function (Blueprint $table) {
            $table->id();
            $table->string('Codigo');
            $table->string('Nombre');
            $table->string('Direccion');
            $table->string('CapacidadTotal');
            $table->string('CapacidadUtilizada');
            $table->string('TipoAlmacen');
            $table->string('Responsable');
            $table->string('TelefonoContacto');
            $table->string('TelefonoContacto2');
            $table->string('CorreoContacto');
            $table->boolean('Estado');
            $table->softDeletes('deleted_at');
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
        Schema::dropIfExists('almacen');
    }
}
