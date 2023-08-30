<?php

namespace Database\Seeders;

use App\Models\ConsequenceLevel;
use Illuminate\Database\Seeder;

class ConsequenceLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ConsequenceLevel::create([
            'name' => 'Mortal o catastrófico',
            'value' => '100',
            'meaning' => 'Se ha (n) detectado peligro (s) que determina(n) como posible la generación de incidentes  o consecuencias muy significativas, o la eficacia del conjunto de medidas preventivas existentes respecto al riesgo es nula o no existe, o ambas.',
            'color'=> '#FE0000',
        ]);
        ConsequenceLevel::create([
            'name' => 'Muy grave',
            'value' => '60',
            'meaning' => 'Lesiones o enfermedades graves irreparables (incapacidad permanente parcial o invalidez).',
            'color'=> '#FD8D14',
        ]);
        ConsequenceLevel::create([
            'name' => 'Grave',
            'value' => '25',
            'meaning' => 'Lesiones o enfermedades con incapacidad laboral temporal (ILT).',
            'color'=> '#F8DE22',
        ]);
        ConsequenceLevel::create([
            'name' => 'Leve',
            'value' => '10',
            'meaning' => 'Lesiones o enfermedades que no requieren incapacidad.',
            'color'=> '#539165',
        ]);

    }
}
