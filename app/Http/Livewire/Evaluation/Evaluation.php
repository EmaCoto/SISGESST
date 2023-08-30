<?php

namespace App\Http\Livewire\Evaluation;

use Livewire\Component;

class Evaluation extends Component
{
    public $currentStep = 'text'; // Estado inicial

    protected $steps = [
        'text',
        'select',
        'number'
    ];

    public function next()
    {
        $currentIndex = array_search($this->currentStep, $this->steps);
        if ($currentIndex < count($this->steps) - 1) {
            $this->currentStep = $this->steps[$currentIndex + 1];
        }
    }

    public function back()
    {
        $currentIndex = array_search($this->currentStep, $this->steps);
        if ($currentIndex > 0) {
            $this->currentStep = $this->steps[$currentIndex - 1];
        }
    }

    public function render()
    {
        return view('livewire.evaluation.evaluation');
    }
}
