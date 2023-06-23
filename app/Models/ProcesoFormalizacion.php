<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Modelo para la gestion del proceso de formalizacion de empresas
 */
class ProcesoFormalizacion extends Model
{
    use HasFactory;

    protected $table = 'proceso_formalizacions';

    protected $fillable = [
        'code',
        'name',
        'description',
        'order',
        'active',
        'url'
    ];
}
