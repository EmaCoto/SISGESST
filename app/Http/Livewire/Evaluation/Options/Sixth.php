<?php

namespace App\Http\Livewire\Evaluation\Options;

use Livewire\Component;

class Sixth extends Component
{
    protected $listeners = ['resultadoUpdate' => 'updateResultado'];

    public $level = 'N/A';
    public $of = 0;
    public $leveldescription;

    public function updateResultado($range)
    {
        $this->of = $range;
        $this->calculateProductAndFourthRange();
    }

    private function calculateProductAndFourthRange()
    {
        $this->of;

        if ($this->of >= 20 && $this->of <= 30) {
            $this->level = 'IV';
            $this->leveldescription = 'Aceptable';
        } elseif ($this->of >= 40 && $this->of <= 120) {
            $this->level = 'III';
            $this->leveldescription = 'Aceptable';
        } elseif ($this->of >= 150 && $this->of <= 500) {
            $this->level = 'II';
            $this->leveldescription = 'No aceptable o aceptable con control específico';
        } elseif ($this->of >= 600 && $this->of <= 4000) {
            $this->level = 'I';
            $this->leveldescription = 'No aceptable';
        } else {
            $this->level = 'N/A';
            $this->leveldescription = '';
        }
    }

    public function render()
    {
        return view('livewire.evaluation.options.sixth');
    }
}
