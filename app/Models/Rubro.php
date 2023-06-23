<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Modelo para los rubros
 */
class Rubro extends Model
{
    use HasFactory;

    protected $table = 'rubros';

    protected $fillable = [
        'code',
        'name',
    ];
}
