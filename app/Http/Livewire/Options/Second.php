<?php

namespace App\Http\Livewire\Options;

use Livewire\Component;

class Second extends Component
{
    public $exposure = null;
    public $selectedSecondRange = 0;


    public $options = [
        'Continua' => [
            'description' => 'La situación de exposición se presenta sin interrupción o varias veces con tiempo prolongado durante la jornada laboral',
            'range' => 4,
        ],
        'Frecuente' => [
            'description' => 'La situación de exposición se presenta varias veces durante la jornada laboral por tiempos cortos',
            'range' => 3,
        ],
        'Ocasional' => [
            'description' => 'La situación de exposición se presenta alguna vez durante la jornada laboral y por un período de tiempo corto',
            'range' => 2,
        ],
        'Esporádica' => [
            'description' => 'La situación de exposición se presenta de manera eventual',
            'range' => 1,
        ],
    ];

    public function updatedSelectedSecondRange()
    {
        $this->emit('selectedSecondRangeUpdated', $this->selectedSecondRange);
    }

    public function updatedExposure()
    {
        if ($this->exposure) {
            $this->selectedSecondRange = $this->options[$this->exposure]['range'];
        } else {
            $this->selectedSecondRange = 0;
        }

        $this->updatedSelectedSecondRange(); // Emit the event
    }

    public function render()
    {
        return view('livewire.options.second');
    }
}
