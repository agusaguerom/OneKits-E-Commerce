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


    public function tallecalzado()
    {
        return $this->belongsTo(TalleCalzado::class,'fk_talle_calzado');
    }


    protected $fillable = [
        'fk_tipo_marca',
        'fk_talle_calzado',
        'nombre',
        'precio',
        'fk_fotos',
        'Descripcion',
    ];

}
