<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $fillable = [
        'lote',
        'fuente',
        'barcode',
        'nombre',
        'invima',
        'expires',
        'import',
        'santiary'

    ];

    public function verificacion()
    {
        return $this->hasOne(Verificacion::class);
    }
}
