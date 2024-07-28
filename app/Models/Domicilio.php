<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class, 'fk_domicilio');
    }

    protected $fillable = [
        'direccion',
        'altura',
        'piso',
        'nroDepto',
    ];
}
