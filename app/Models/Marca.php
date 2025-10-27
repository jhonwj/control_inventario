<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Marca extends Model
{

    protected $table = 'marca';
    protected $casts = [
        'Estado' => 'boolean',
    ];
    protected $fillable = [
        'Codigo',
        'Nombre',
        'Estado',
    ];
}
