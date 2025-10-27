<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Almacen extends Model
{

    protected $table = 'almacen';
    protected $casts = [
        'Estado' => 'boolean',
    ];
    protected $fillable = [
        'Codigo',
        'Nombre',
        'Direccion',
        'CapacidadTotal',
        'CapacidadUtilizada',
        'TipoAlmacen',
        'Responsable',
        'TelefonoContacto',
        'TelefonoContacto2',
        'CorreoContacto',
        'Estado',
    ];
}
