<?php

namespace App\Http\Livewire\Evaluation;

use Livewire\Component;

class Evaluation extends Component
{
    public $step = 1;
    public $updatedDanger, $updatedPossibleEffects;
    protected $listeners = [
        'updatedDanger' => 'allVariables',
        'updatedPossibleEffects' => 'allVariables'
    ];



    public function allVariables($data){
        if (isset($data['danger'])) {
            $this->updatedDanger = $data['danger'];
        }

        if (isset($data['possibleEffects'])) {
            $this->updatedPossibleEffects = $data['possibleEffects'];
        }
    }


    //buttons logic back/next
    public function incrementStep()
    {
        if ($this->step < 3) {
            $this->step++;
        }
    }

    public function decrementStep()
    {
        if ($this->step > 1) {
            $this->step--;
        }
    }


    public function render()
    {
        return view('livewire.evaluation.evaluation');
    }
}
