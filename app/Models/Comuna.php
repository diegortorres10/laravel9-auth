<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Modelo para gestion de comunas
 */
class Comuna extends Model
{
    use HasFactory;
    
    protected $table = 'comunas';

    protected $fillable = [
        'code',
        'name',
    ];
}
