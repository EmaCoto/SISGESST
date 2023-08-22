<?php

namespace App\Http\Livewire\Options;

use Livewire\Component;

class First extends Component
{
    public $deficiency = null;
    public $selectedFirstRange = 0;


    public $options = [
        'Muy alto' => [
            'description' => 'Se ha(n) detectado peligro(s) que determina(n) como posible la generación de incidentes  o consecuencias muy significativas, o la eficacia del conjunto de medidas preventivas existentes respecto al riesgo es nula o no existe, o ambas.',
            'range' => 10,
        ],
        'Alto' => [
            'description' => 'Se ha(n) detectada algún(os) peligro(s) que pueden dar lugar a consecuencias significativa(s), o la eficacia del conjunto de medidas preventivas existentes es baja, o ambas.',
            'range' => 6,
        ],
        'Medio' => [
            'description' => 'Se han detectado peligros que pueden dar lugar a consecuencias poco significativas o de menor importancia, o la eficacia del conjunto de medidas preventivas existentes es moderada, o ambas.',
            'range' => 2,
        ],
        'Bajo' => [
            'description' => 'No se ha detectado consecuencia alguna, o la eficacia del conjunto de medidas preventivas existentes es alta, o ambas. El riesgo está controlado',
            'range' => "",
        ],
    ];

    public function updatedDeficiency()
    {
        if ($this->deficiency) {
            $this->selectedFirstRange = $this->options[$this->deficiency]['range'];
        } else {
            $this->selectedFirstRange = 0;
        }
        $this->emit('selectedFirstRangeUpdated', $this->selectedFirstRange);

    }

    public function render()
    {
        return view('livewire.options.first');
    }
}
