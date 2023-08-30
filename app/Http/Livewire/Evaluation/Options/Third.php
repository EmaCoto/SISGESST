<?php

namespace App\Http\Livewire\Evaluation\Options;

use App\Models\ProbabilityLevel;
use Livewire\Component;

class Third extends Component
{
    protected $listeners = ['selectedValueFirst', 'selectedValueSecond'];



    public $selectedValueFirst = 0;
    public $selectedValueSecond = 0;
    public $value = 0;
    public $probabilityLevel;
    public $name = 'N/A';
    public $meaning;


    public function selectedValueFirst($range)
    {
        $this->selectedValueFirst = $range;
        $this->calculateProductAndProbability();
    }

    public function selectedValueSecond($range)
    {
        $this->selectedValueSecond = $range;
        $this->calculateProductAndProbability();
    }

    private function calculateProductAndProbability()
    {
        $this->value = $this->selectedValueFirst * $this->selectedValueSecond;

        if ($this->value >= 2 && $this->value <= 4) {
            $this->name = 'Bajo';
            $this->meaning='Situación mejorable con exposición ocasional o esporádica, o situación sin anomalía destacable con cualquier nivel de exposición.  No es esperable que se materialice el riesgo, aunque puede ser concebible.';
        } elseif ($this->value >= 6 && $this->value <= 8) {
            $this->name = 'Medio';
            $this->meaning='Situación deficiente con exposición esporádica o bien situación mejorada con exposición continuada o frecuente.  Es posible que suceda el daño alguna vez.';
        } elseif ($this->value >= 10 && $this->value <= 20) {
            $this->name = 'Alto';
            $this->meaning='situación deficiente con exposición frecuente u ocasioanal, o bien situación muy deficiente con exposición ocasional o esporádica.  La materialización del riesgo es posible que suceda varias veces en la vida laboral.';
        } elseif ($this->value >= 24 && $this->value <= 40) {
            $this->name = 'Muy Alto';
            $this->meaning='Situación deficiente con exposición continua o muy deficiente con exposición frecuente. Normalmente la materialización del riesgo ocurre con frecuencia';
        } else {
            $this->name = 'N/A';
        }
        $this->emit('valueUpdated', $this->value);
    }

    public function render()
    {
        $this->probabilityLevel = ProbabilityLevel::all();
        return view('livewire.evaluation.options.third');
    }
}
