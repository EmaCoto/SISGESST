<?php

namespace Database\Seeders;

use App\Models\ExposureLevel;
use Illuminate\Database\Seeder;

class ExposureLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ExposureLevel::create([
            'name' => 'Continua',
            'value' => '4',
            'meaning' => 'La situación de exposición se presenta sin interrupción o varias veces con tiempo prolongado durante la jornada laboral',
            'color'=> '#FE0000',
        ]);
        ExposureLevel::create([
            'name' => 'Frecuente ',
            'value' => '3',
            'meaning' => 'La situación de exposición se presenta varias veces durante la jornada laboral por tiempos cortos',
            'color'=> '#FD8D14',
        ]);
        ExposureLevel::create([
            'name' => 'Ocasional  ',
            'value' => '2',
            'meaning' => 'La situación de exposición se presenta alguna vez durante la jornada laboral y por un período de tiempo corto',
            'color'=> '#F8DE22',
        ]);
        ExposureLevel::create([
            'name' => 'Esporádica  ',
            'value' => '1',
            'meaning' => 'La situación de exposición se presenta de manera eventual',
            'color'=> '#539165',
        ]);
    }
}
