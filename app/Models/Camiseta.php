<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camiseta extends Model
{
    use HasFactory;
    protected $fillable = [
        'fk_tipo_marca',
        'fk_equipo',
        'fk_tipo_talle',
        'nombre',
        'precio',
        'fk_fotos',
        'descripcion' 
    ];
}
