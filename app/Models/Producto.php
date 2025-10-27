<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Producto extends Model
{

    protected $table = 'producto';
    protected $casts = [
        'Estado' => 'boolean',
    ];
    protected $fillable = [
        'IdMarca',
        'IdCategoria',
        'IdModelo',
        'Codigo',
        'Nombre',
        'PrecioC',
        'PrecioV',
        'Estado',
    ];
}
