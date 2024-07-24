<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoMarca extends Model
{
    use HasFactory;

    public function camisetas()
    {
        return $this->hasMany(Camiseta::class, 'fk_tipo_marca');
    }


    public function tipomarca()
    {
        return $this->hasMany(Camiseta::class, 'nombre');

    }
}
