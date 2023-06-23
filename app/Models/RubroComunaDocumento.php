<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Modelo para la gestion de que documento esta asociado a un rubro y a una comuna
 */
class RubroComunaDocumento extends Model
{
    use HasFactory;

    protected $table = 'rubro_comuna_documentos';

    protected $fillable = [
        'rubro_id',
        'comuna_id',
        'documento_id'
    ];

    /**
     * Relations rubro 
     */
    public function rubro()
    {
        return $this->belongsTo(Rubro::class);
    }

    /**
     * Relations comuna
     */
    public function comuna()
    {
        return $this->belongsTo(Comuna::class);
    }

    /**
     * Relations documento
     */
    public function documento()
    {
        return $this->belongsTo(Documento::class);
    }
}
