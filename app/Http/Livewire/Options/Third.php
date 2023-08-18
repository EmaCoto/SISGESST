<?php

namespace App\Http\Livewire\Options;

use Livewire\Component;

class Third extends Component
{
    public $probabilidad = null;

    public $options = [
        'Continua' => [
            'description' => 'La situación de exposición se presenta sin interrupción o varias veces con tiempo prolongado durante la jornada laboral',
            'rango' => "",
        ],
        'Frecuente' => [
            'description' => 'La situación de exposición se presenta varias veces durante la jornada laboral por tiempos cortos',
            'rango' => "",
        ],
        'Ocasional' => [
            'description' => 'La situación de exposición se presenta alguna vez durante la jornada laboral y por un período de tiempo corto',
            'rango' => "",
        ],
        'Esporádica' => [
            'description' => 'La situación de exposición se presenta de manera eventual',
            'rango' => "",
        ],
    ];
    public function render()
    {
        return view('livewire.options.third');
    }
}