<?php

namespace App\Http\Livewire\Options;

use Livewire\Component;

class Third extends Component
{
    protected $listeners = ['selectedFirstRangeUpdated', 'selectedSecondRangeUpdated'];



    public $selectedFirstRange = 0;
    public $selectedSecondRange = 0;
    public $product = 0;
    public $probabilityLevel = 'N/A';
    public $description;


    public function selectedFirstRangeUpdated($range)
    {
        $this->selectedFirstRange = $range;
        $this->calculateProductAndProbability();
    }

    public function selectedSecondRangeUpdated($range)
    {
        $this->selectedSecondRange = $range;
        $this->calculateProductAndProbability();
    }

    private function calculateProductAndProbability()
    {
        $this->product = $this->selectedFirstRange * $this->selectedSecondRange;

        if ($this->product >= 2 && $this->product <= 4) {
            $this->probabilityLevel = 'Bajo';
            $this->description='Situación mejorable con exposición ocasional o esporádica, o situación sin anomalía destacable con cualquier nivel de exposición.  No es esperable que se materialice el riesgo, aunque puede ser concebible.';
        } elseif ($this->product >= 6 && $this->product <= 8) {
            $this->probabilityLevel = 'Medio';
            $this->description='Situación deficiente con exposición esporádica o bien situación mejorada con exposición continuada o frecuente.  Es posible que suceda el daño alguna vez.';
        } elseif ($this->product >= 10 && $this->product <= 20) {
            $this->probabilityLevel = 'Alto';
            $this->description='situación deficiente con exposición frecuente u ocasioanal, o bien situación muy deficiente con exposición ocasional o esporádica.  La materialización del riesgo es posible que suceda varias veces en la vida laboral.';
        } elseif ($this->product >= 24 && $this->product <= 40) {
            $this->probabilityLevel = 'Muy Alto';
            $this->description='Situación deficiente con exposición continua o muy deficiente con exposición frecuente. Normalmente la materialización del riesgo ocurre con frecuencia';
        } else {
            $this->probabilityLevel = 'N/A';
        }
        $this->emit('productUpdated', $this->product);
    }

    public function render()
    {
        return view('livewire.options.third');
    }
}
