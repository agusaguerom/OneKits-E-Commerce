<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Botin extends Model
{
    use HasFactory;

    protected $fillable = ['fk_tipo_marca', 'fk_equipo', 'fk_talle_calzado', 'nombre', 'precio', 'fk_fotos','Descripcion'];
}
