<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $fillable = [
        'numero',
        'key'
    ];

    public function verificacion()
    {
        return $this->hasOne(Verificacion::class);
    }

    public function lote()
    {
        return $this->belongsTo(Lote::class, 'lote_id');
    }
}
