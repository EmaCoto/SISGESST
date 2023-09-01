<?php

namespace App\Http\Livewire\Evaluation\Text;

use Livewire\Component;

class PossibleEffects extends Component
{
    public $possibleEffects;
    protected $rules = [
        'possibleEffects' => 'required|min:6'
    ];


    public function updatedPossibleEffects()
    {
        $this->validate();
        $this->emit('updatedPossibleEffects', $this->possibleEffects);
    }
    public function render()
    {
        return view('livewire.evaluation.text.possible-effects');
    }
}
