<?php

namespace App\Http\Livewire\Options;

use Livewire\Component;

class Second extends Component
{
    public $exposicion = null;
    public $selectedSecondRange = 0;


    public $options = [
        'Continua' => [
            'description' => 'La situación de exposición se presenta sin interrupción o varias veces con tiempo prolongado durante la jornada laboral',
            'rango' => 4,
        ],
        'Frecuente' => [
            'description' => 'La situación de exposición se presenta varias veces durante la jornada laboral por tiempos cortos',
            'rango' => 3,
        ],
        'Ocasional' => [
            'description' => 'La situación de exposición se presenta alguna vez durante la jornada laboral y por un período de tiempo corto',
            'rango' => 2,
        ],
        'Esporádica' => [
            'description' => 'La situación de exposición se presenta de manera eventual',
            'rango' => 1,
        ],
    ];

    public function updatedExposicion()
    {
        if ($this->exposicion) {
            $this->selectedSecondRange = $this->options[$this->exposicion]['rango'];

        } else {
            $this->selectedSecondRange = 0;
        }
    }
    public function render()
    {
        return view('livewire.options.second');
    }
}
