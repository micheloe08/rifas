<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartados extends Model
{
    protected $table = 'apartados';

    protected $guarded = [];

    public function cliente()
    {
        return $this->belongsTo(Clientes::class, 'cliente_id');
    }

    public function sorteo()
    {
        return $this->belongsTo(Sorteos::class, 'sorteo_id');
    }
}
