<?php

namespace App\Http\Livewire\Options;

use Livewire\Component;

class Fifth extends Component
{
    protected $listeners = ['selectedFourthRangeUpdated','productUpdated' => 'updateProduct'];

    public $otherValue = 0;
    public $selectedFourthRange = 0;
    public $intervention = 'N/A';
    public $description;
    public $resultado = 0;



    public function selectedFourthRangeUpdated($range)
    {
        $this->selectedFourthRange = $range;
        $this->calculateProductAndFourthRange();
    }

    public function updateProduct($product)
    {
        $this->otherValue = $product;
        $this->calculateProductAndFourthRange();
    }
    private function calculateProductAndFourthRange()
    {
        $this->resultado = $this->otherValue * $this->selectedFourthRange;

        if ($this->resultado >= 20 && $this->resultado <= 30) {
            $this->intervention = '20';
            $this->description='Mantener las medidas de control existentes, pero se deberían considerar soluciones o mejoras y se deben hacer comprobaciones periódicas para asegurar que el riesgo aún es aceptable.';
        } elseif ($this->resultado >= 40 && $this->resultado <= 120) {
            $this->intervention = '120 - 40';
            $this->description='Mejorar si es posible. Sería conveniente justificar la intervención y su rentabilidad.';
        } elseif ($this->resultado >= 150 && $this->resultado <= 500) {
            $this->intervention = '500 - 150';
            $this->description='Corregir y adoptar medidas de control de inmediato. Sin embargo, suspenda actividades si el nivel de riesgo está por encima o igual de 360';
        } elseif ($this->resultado >= 600 && $this->resultado <= 4000) {
            $this->intervention = '4000 - 600';
            $this->description='Situación crítica. Suspender actividades hasta que el riesgo esté bajo control. Intervención urgente';
        } else {
            $this->intervention = 'N/A';
        }
        $this->emit('resultadoUpdate', $this->resultado);
    }

    public function render()
    {
        return view('livewire.options.fifth');
    }
}
