<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagenCamiseta extends Model
{
    use HasFactory;

    protected $table = 'imagencamisetas';

    protected $fillable = ['url_img', 'fk_camiseta'];


    public function camiseta()
    {
        return $this->belongsTo(Camiseta::class, 'fk_camiseta');
    }

}
