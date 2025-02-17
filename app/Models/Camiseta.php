<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TipoMarca;

class Camiseta extends Model
{
    use HasFactory;

    public function tipomarca()
    {
        return $this->belongsTo(TipoMarca::class,'fk_tipo_marca');
    }

    public function equipo()
    {
        return $this->belongsTo(Equipo::class,'fk_equipo');
    }


    public function tipotalle()
    {
        return $this->belongsTo(TipoTalle::class,'fk_tipo_talle');
    }


    public function stocks()
    {
        return $this->hasMany(Stock::class, 'fk_camiseta');
    }


    public function imagenes()
    {
        return $this->hasMany(ImagenCamiseta::class, 'fk_camiseta');
    }



    protected $fillable = [
        'fk_tipo_marca',
        'fk_equipo',
        'fk_tipo_talle',
        'nombre',
        'precio',
        'fk_fotos',
        'Descripcion',
    ];



}
