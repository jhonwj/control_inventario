<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Perfil extends Model
{

    protected $table = 'perfil_usuario';
    protected $casts = [
        'Estado' => 'boolean',
    ];
    protected $fillable = [
        "Codigo",
        "Name",
        "Descripcion",
        "Estado",
    ];
}
