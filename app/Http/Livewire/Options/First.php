<?php

namespace App\Http\Livewire\Options;

use Livewire\Component;

class First extends Component
{
    public $deficiencia = null;

    public $options = [
        'Muy alto' => [
            'description' => 'Se ha(n) detectado peligro(s) que determina(n) como posible la generación de incidentes  o consecuencias muy significativas, o la eficacia del conjunto de medidas preventivas existentes respecto al riesgo es nula o no existe, o ambas.',
            'rango' => 10,
        ],
        'Alto' => [
            'description' => 'Se ha(n) detectada algún(os) peligro(s) que pueden dar lugar a consecuencias significativa(s), o la eficacia del conjunto de medidas preventivas existentes es baja, o ambas.',
            'rango' => 6,
        ],
        'Medio' => [
            'description' => 'Se han detectado peligros que pueden dar lugar a consecuencias poco significativas o de menor importancia, o la eficacia del conjunto de medidas preventivas existentes es moderada, o ambas.',
            'rango' => 2,
        ],
        'Bajo' => [
            'description' => 'No se ha detectado consecuencia alguna, o la eficacia del conjunto de medidas preventivas existentes es alta, o ambas. El riesgo está controlado',
            'rango' => "NA",
        ],
    ];
    public function render()
    {
        return view('livewire.options.first');
    }
}
