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
        } elseif ($this->product >= 6 && $this->product <= 8) {
            $this->probabilityLevel = 'Medio';
        } elseif ($this->product >= 10 && $this->product <= 20) {
            $this->probabilityLevel = 'Alto';
        } elseif ($this->product >= 24 && $this->product <= 40) {
            $this->probabilityLevel = 'Muy Alto';
        } else {
            $this->probabilityLevel = 'N/A';
        }
    }

    public function render()
    {
        return view('livewire.options.third');
    }
}
