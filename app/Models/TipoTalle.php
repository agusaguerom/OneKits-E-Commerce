<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoTalle extends Model
{
    use HasFactory;


    public function camisetas()
    {
        return $this->hasMany(Camiseta::class, 'fk_tipo_talle');
    }


    public function tipotalle()
    {
        return $this->hasMany(Camiseta::class, 'nombre_talle');

    }
}
