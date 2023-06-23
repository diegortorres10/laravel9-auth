<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rubro;

class RubrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rubro::create([
            'code' => 'MINIMARKET',
            'name' => 'Minimarket'
        ]);
        Rubro::create([
            'code' => 'PASTELERIA',
            'name' => 'Pastelería'
        ]);
        Rubro::create([
            'code' => 'ELECTRONICA',
            'name' => 'Electrónica'
      ]);
    }
}
