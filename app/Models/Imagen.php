<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;
    protected $fillable = [
        'url_imagen',
        'fk_botines',
        'fk_camisetas',
        'fk_pelotas'
    ];
}
