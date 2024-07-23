<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelota extends Model
{
    use HasFactory;

    protected $fillable = [
        'fk_tipo_marca',
        'nombre',
        'precio',
        'fk_fotos',
        'Descripcion' 
    ];
}
