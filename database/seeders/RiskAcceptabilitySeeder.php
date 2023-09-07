<?php

namespace Database\Seeders;

use App\Models\RiskAcceptability;
use Illuminate\Database\Seeder;

class RiskAcceptabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RiskAcceptability::create([
            'name' => 'I',
            'value' => 600,
            'meaning' => 'Situación crítica. Suspender actividades hasta que el riesgo esté bajo control. Intervención urgente.',
            'color'=> '#FE0000',
        ]);
        RiskAcceptability::create([
            'name' => 'II',
            'value' => 150,
            'meaning' => 'Corregir y adoptar medidas de control de inmediato. Sin embargo, suspenda actividades si el nivel de riesgo está por encima o igual de 360.',
            'color'=> '#FD8D14',
        ]);
        RiskAcceptability::create([
            'name' => 'III',
            'value' => 40,
            'meaning' => 'Mejorar si es posible. Sería conveniente justificar la intervención y su rentabilidad.',
            'color'=> '#F8DE22',
        ]);
        RiskAcceptability::create([
            'name' => 'IV',
            'value' => 20,
            'meaning' => 'Situación deficiente con exposición continua o muy deficiente con exposición frecuente. Normalmente la materialización del riesgo ocurre con frecuencia.',
            'color'=> '#96C291',
        ]);
    }
}
