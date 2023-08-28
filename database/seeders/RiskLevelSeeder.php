<?php

namespace Database\Seeders;

use App\Models\RiskLevel;

use Illuminate\Database\Seeder;

class RiskLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RiskLevel::class([
            'name' => 'I',
            'value' => '4000 - 600',
            'meaning' => 'Situación crítica. Suspender actividades hasta que el riesgo esté bajo control. Intervención urgente.',
            'color'=> '#FE0000',
        ]);
        RiskLevel::class([
            'name' => 'II',
            'value' => '500 - 150',
            'meaning' => 'Corregir y adoptar medidas de control de inmediato. Sin embargo, suspenda actividades si el nivel de riesgo está por encima o igual de 360.',
            'color'=> '#FD8D14',
        ]);
        RiskLevel::class([
            'name' => 'III',
            'value' => '120 - 40',
            'meaning' => 'Mejorar si es posible. Sería conveniente justificar la intervención y su rentabilidad.',
            'color'=> '#F8DE22',
        ]);
        RiskLevel::class([
            'name' => 'IV',
            'value' => '20',
            'meaning' => 'Situación deficiente con exposición continua o muy deficiente con exposición frecuente. Normalmente la materialización del riesgo ocurre con frecuencia.',
            'color'=> '#96C291',
        ]);
    }
}
