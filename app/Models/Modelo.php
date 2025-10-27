<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Modelo extends Model
{

    protected $table = 'modelo';
    protected $casts = [
        'Estado' => 'boolean',
    ];
    protected $fillable = [
        'Codigo',
        'Nombre',
        'Estado',
    ];
}
