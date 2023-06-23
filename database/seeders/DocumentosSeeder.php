<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Documento;

class DocumentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Documento::create([
            'code' => 'PERMISO_OBRAS',
            'name' => 'Permiso de obras'
        ]);
        Documento::create([
            'code' => 'PERMISO_OPERATIVIDAD',
            'name' => 'Permiso de operatividad'
        ]);
        Documento::create([
            'code' => 'CONFORMACION_SOCIEDAD',
            'name' => 'Conformación de la sociedad'
        ]);
        Documento::create([
            'code' => 'PERMISO_MANUFACTURA_ALIMENTOS',
            'name' => 'Permiso de manufactura de alimentos'
        ]);
        Documento::create([
            'code' => 'PERMISO_AUTORIZACION_SANITARIA',
            'name' => 'Permiso de autorización Sanitaria'
        ]);
        Documento::create([
            'code' => 'PERMISOS_IMPORTACIÓN',
            'name' => 'Permisos de importación'
        ]);
        Documento::create([
            'code' => 'PATENTES_LEGALES_PRODUCTOS_VENTA',
            'name' => 'Patentes legales de productos en venta'
        ]);
        Documento::create([
            'code' => 'PERMISO_MANIPULACIÓN_ALIMENTOS',
            'name' => 'Permiso de manipulación de alimentos'
        ]);
        Documento::create([
            'code' => 'CÉDULA_IDENTIDAD',
            'name' => 'Cédula de identidad'
        ]);
        Documento::create([
            'code' => 'PATENTE_MANUFACTURA_PROVEEDORES',
            'name' => 'Patente de manufactura de proveedores'
        ]);
        Documento::create([
            'code' => 'COPIA_TRASLADO_INICIAL_MERCADERÍAS',
            'name' => 'Copia de traslado inicial de mercaderías'
        ]);
        Documento::create([
            'code' => 'MANUAL_DE_COMERCIALIZACIÓN_PRODUCTOS',
            'name' => 'Manual de buenas prácticas para la comercialización de productos'
        ]);
    }
}
