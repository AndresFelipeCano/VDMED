<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    protected $fillable = [
        'nombre',
        'importador',
        'distribuidor',
        'numero',
        'fecha_vencimiento',
        'invima',
    ];

    protected $table = 'lotes';

    public function medicamentos()
    {
        return $this->hasMany(Medicamento::class);
    }
    public function verificacions()
    {
        return $this->hasManyThrough(Verificacion::class, Medicamento::class);
    }
}
