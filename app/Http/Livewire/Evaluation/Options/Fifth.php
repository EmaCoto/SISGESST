<?php

namespace App\Http\Livewire\Evaluation\Options;

use Livewire\Component;

class Fifth extends Component
{
    protected $listeners = ['selectedValueFour', 'valueThird'];

    public $value;
    public $selectedFourthRange = 0;
    public $intervention = 'N/A';
    public $meaning;
    public $color;
    public $result;



    public function selectedValueFour($range)
    {
        $this->selectedFourthRange = $range;
        $this->calculateProductAndFourthRange();
    }

    public function valueThird($product)
    {
        $this->value = $product;
        $this->calculateProductAndFourthRange();
    }
    private function calculateProductAndFourthRange()
    {
        $this->result = $this->value * $this->selectedFourthRange;

        if ($this->result >= 20 && $this->result <= 30) {
            $this->intervention = '20';
            $this->meaning='Mantener las medidas de control existentes, pero se deberían considerar soluciones o mejoras y se deben hacer comprobaciones periódicas para asegurar que el riesgo aún es aceptable.';
            $this->color = "#539165";
        } elseif ($this->result >= 40 && $this->result <= 120) {
            $this->intervention = '120 - 40';
            $this->meaning='Mejorar si es posible. Sería conveniente justificar la intervención y su rentabilidad.';
            $this->color = "#F8DE22";
        } elseif ($this->result >= 150 && $this->result <= 500) {
            $this->intervention = '500 - 150';
            $this->meaning='Corregir y adoptar medidas de control de inmediato. Sin embargo, suspenda actividades si el nivel de riesgo está por encima o igual de 360';
            $this->color = "#FD8D14";
        } elseif ($this->result >= 600 && $this->result <= 4000) {
            $this->intervention = '4000 - 600';
            $this->meaning='Situación crítica. Suspender actividades hasta que el riesgo esté bajo control. Intervención urgente';
            $this->color = "#FE0000";
        } else {
            $this->result = '';
            $this->intervention = 'N/A';
            $this->meaning = '';
            $this->color = '';
        }
        $this->emit('resultUpdate', $this->result);
    }

    public function render()
    {
        return view('livewire.evaluation.options.fifth');
    }
}
