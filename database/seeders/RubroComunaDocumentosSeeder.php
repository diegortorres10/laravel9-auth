<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RubroComunaDocumento;

class RubroComunaDocumentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RubroComunaDocumento::create([
            'comuna_id' => 1,
            'rubro_id' => 1,
            'documento_id' => 1
        ]);
        RubroComunaDocumento::create([
            'comuna_id' => 1,
            'rubro_id' => 1,
            'documento_id' => 2
        ]);
        RubroComunaDocumento::create([
            'comuna_id' => 1,
            'rubro_id' => 1,
            'documento_id' => 3
        ]);
        RubroComunaDocumento::create([
            'comuna_id' => 1,
            'rubro_id' => 2,
            'documento_id' => 4
        ]);
        RubroComunaDocumento::create([
            'comuna_id' => 1,
            'rubro_id' => 2,
            'documento_id' => 5
        ]);
        RubroComunaDocumento::create([
            'comuna_id' => 1,
            'rubro_id' => 3,
            'documento_id' => 6
        ]);
        RubroComunaDocumento::create([
            'comuna_id' => 1,
            'rubro_id' => 3,
            'documento_id' => 7
        ]);
        RubroComunaDocumento::create([
            'comuna_id' => 2,
            'rubro_id' => 1,
            'documento_id' => 1
        ]);
        RubroComunaDocumento::create([
            'comuna_id' => 2,
            'rubro_id' => 1,
            'documento_id' => 8
        ]);
        RubroComunaDocumento::create([
            'comuna_id' => 2,
            'rubro_id' => 1,
            'documento_id' => 3
        ]);
        RubroComunaDocumento::create([
            'comuna_id' => 2,
            'rubro_id' => 2,
            'documento_id' => 4
        ]);
        RubroComunaDocumento::create([
            'comuna_id' => 2,
            'rubro_id' => 2,
            'documento_id' => 5
        ]);
        RubroComunaDocumento::create([
            'comuna_id' => 2,
            'rubro_id' => 2,
            'documento_id' => 9
        ]);
        RubroComunaDocumento::create([
            'comuna_id' => 2,
            'rubro_id' => 3,
            'documento_id' => 6
        ]);
        RubroComunaDocumento::create([
            'comuna_id' => 2,
            'rubro_id' => 3,
            'documento_id' => 10
        ]);
        RubroComunaDocumento::create([
            'comuna_id' => 3,
            'rubro_id' => 1,
            'documento_id' => 9
        ]);
        RubroComunaDocumento::create([
            'comuna_id' => 3,
            'rubro_id' => 1,
            'documento_id' => 11
        ]);
        RubroComunaDocumento::create([
            'comuna_id' => 3,
            'rubro_id' => 1,
            'documento_id' => 12
        ]);
        RubroComunaDocumento::create([
            'comuna_id' => 3,
            'rubro_id' => 2,
            'documento_id' => 4
        ]);
        RubroComunaDocumento::create([
            'comuna_id' => 3,
            'rubro_id' => 2,
            'documento_id' => 5
        ]);
        RubroComunaDocumento::create([
            'comuna_id' => 3,
            'rubro_id' => 2,
            'documento_id' => 9
        ]);
        RubroComunaDocumento::create([
            'comuna_id' => 3,
            'rubro_id' => 3,
            'documento_id' => 6
        ]);
        RubroComunaDocumento::create([
            'comuna_id' => 3,
            'rubro_id' => 3,
            'documento_id' => 10
        ]);
        RubroComunaDocumento::create([
            'comuna_id' => 3,
            'rubro_id' => 3,
            'documento_id' => 9
        ]);
    }
}
