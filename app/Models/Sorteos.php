<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sorteos extends Model
{
    protected $table = 'sorteos';

    protected $fillable = ['id', 'descripcion', 'costo', 'tiraje', 'fecha_sorteo_principal', 'fecha_sorteo_preliminar',
    'premio_principal', 'premio_preliminar', 'bono', 'imagen1', 'imagen2', 'imagen3', 'tiraje', 'status', 'ganador_preliminar',
    'ganador_principal', 'bono_ganado', 'evidencia'];
}
