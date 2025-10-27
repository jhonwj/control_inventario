<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Almacen extends Model
{

    protected $table = 'almacen';
    protected $casts = [
        'Estado' => 'boolean',
    ];
}
