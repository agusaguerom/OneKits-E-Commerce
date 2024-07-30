<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TipoMarca;
use App\Models\TalleCalzado;



class Botin extends Model
{
    use HasFactory;

    protected $table = 'botines';


    public function tipomarca()
    {
        return $this->belongsTo(TipoMarca::class,'fk_tipo_marca');
    }


    public function imagenes()
    {
        return $this->hasMany(ImagenBotin::class, 'fk_botin');
    }


    public function stocks()
    {
        return $this->hasMany(StockCalzado::class, 'fk_botin');
    }


    public function tipotalle()
    {
        return $this->belongsTo(TalleCalzado::class,'fk_talle_calzados');
    }



    protected $fillable = [
        'fk_tipo_marca',
        'nombre',
        'precio',
        'Descripcion',
    ];



}
