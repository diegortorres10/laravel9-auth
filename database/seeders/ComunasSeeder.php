<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comuna;

class ComunasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comuna::create([
            'code' => 'CONDES',
            'name' => 'Las Condes'
        ]);
        Comuna::create([
            'code' => 'PUENTE_ALTO',
            'name' => 'Puente Alto'
        ]);
        Comuna::create([
            'code' => 'FLORIDA',
            'name' => 'La Florida'
        ]);
    }
}
