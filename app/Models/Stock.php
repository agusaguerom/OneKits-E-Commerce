<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'fk_camiseta',
        'fk_tipo_talle',
        'cantidad'
    ];

    public function tipoTalle()
    {
        return $this->belongsTo(TipoTalle::class, 'fk_tipo_talle');
    }

    public function camiseta()
    {
        return $this->belongsTo(Camiseta::class, 'fk_camiseta');
    }
    }
