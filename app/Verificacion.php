<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verificacion extends Model
{
    public function medicamento()
    {
        return $this->belongsTo(Medicamento::class, 'medicamento_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
