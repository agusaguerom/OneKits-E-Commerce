<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagenBotin extends Model
{
    use HasFactory;

    protected $table = 'imagenbotins';

    protected $fillable = ['url_img', 'fk_botin'];

    public function botin()
    {
        return $this->belongsTo(Botin::class, 'fk_botin');
    }

}
