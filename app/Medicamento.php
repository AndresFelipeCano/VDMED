<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $fillable = [
        'fuente',
        'barcode',
        'nombre',
        'invima'
    ];

    public function verificacion()
    {
        return $this->hasMany(Verificaton::class);
    }
}