<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockCalzado extends Model
{
    use HasFactory;


    protected $table = 'stock_calzados';

    protected $fillable = [
        'fk_botin',
        'fk_talle_calzados',
        'cantidad',
    ];

    public function botin()
    {
        return $this->belongsTo(Botin::class, 'fk_botin');
    }

    public function talleCalzado()
    {
        return $this->belongsTo(TalleCalzado::class, 'fk_talle_calzados');
    }




}
