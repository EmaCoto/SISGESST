<?php

namespace App\Http\Livewire\Evaluation\Text;

use Livewire\Component;

class PossibleEffects extends Component
{
    public $possibleEffects;

    public function updatedPossibleEffects()
    {
        $this->emit('updatedPossibleEffects', ['possibleEffects' => $this->possibleEffects]);
    }
    public function render()
    {
        return view('livewire.evaluation.text.possible-effects');
    }
}
