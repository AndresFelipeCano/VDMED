<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verificacion extends Model
{
    protected $fillable = [
        'lote',
        'fuente',
        'barcode',
        'nombre',
        'invima'
    ]

    public function medicamento()
    {
        return $this->belongsTo(Medicamento::class);
    }
}
