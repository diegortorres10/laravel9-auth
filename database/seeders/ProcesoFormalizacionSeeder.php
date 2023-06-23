<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProcesoFormalizacion;

class ProcesoFormalizacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProcesoFormalizacion::create([
            'code' => 'PASO_1',
            'order' => '1',
            'name' => 'Paso 1: Constituir una empresa',
            'description' => 'Para constituir tu empresa entra al siguiente enlace: https://www.registrodeempresasysociedades.cl/',
        ]);
        ProcesoFormalizacion::create([
            'code' => 'PASO_2',
            'order' => '2',
            'name' => 'Paso 2: Formalizar Ante el SII',
            'description' => 'Crea tu cuenta de usuario en el portal del SII e ingresa la información solicitada. https://homer.sii.cl/',
        ]);
        ProcesoFormalizacion::create([
            'code' => 'PASO_3',
            'order' => '3',
            'name' => 'Paso 3: Presentar documentación en Municipio',
            'description' => 'Debes dirigirte al municipio de tu comuna y presenta la documentación solicitada. Los documentos son los siguientes:',
        ]);
    }
}
