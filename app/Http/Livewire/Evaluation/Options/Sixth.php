<?php

namespace App\Http\Livewire\Evaluation\Options;

use Livewire\Component;

class Sixth extends Component
{
    protected $listeners = ['resultUpdate' => 'updateResultado'];

    public $name;
    public $result = 0;
    public $meaning = 'N/A';
    public $color;

    public function updateResultado($range)
    {
        $this->result = $range;
        $this->calculateProductAndFourthRange();
    }

    private function calculateProductAndFourthRange()
    {
        $this->result;

        if ($this->result >= 20 && $this->result <= 30) {
            $this->name = 'IV';
            $this->meaning = 'Aceptable';
            $this->color = "#539165";
        } elseif ($this->result >= 40 && $this->result <= 120) {
            $this->name = 'III';
            $this->meaning = 'Aceptable';
            $this->color = "#F8DE22";
        } elseif ($this->result >= 150 && $this->result <= 500) {
            $this->name = 'II';
            $this->meaning = 'No aceptable o aceptable con control específico';
            $this->color = "#FD8D14";
        } elseif ($this->result >= 600 && $this->result <= 4000) {
            $this->name = 'I';
            $this->meaning = 'No aceptable';
            $this->color = "#539165";
        } else {
            $this->name = '';
            $this->meaning = 'N/A';
        }
    }

    public function render()
    {
        return view('livewire.evaluation.options.sixth');
    }
}
