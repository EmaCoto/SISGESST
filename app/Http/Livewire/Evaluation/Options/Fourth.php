<?php

namespace App\Http\Livewire\Evaluation\Options;

use App\Models\ConsequenceLevel;
use Livewire\Component;

class Fourth extends Component
{
    public $consequenceLevel;
    public $selectedConsequence = null;
    public $selectedValue = null;
    public $selectedMeaning = null;
    public $selectedColor = null;

    public function render()
    {
        $this->consequenceLevel = ConsequenceLevel::all();
        return view('livewire.evaluation.options.fourth');
    }
    public function updatedSelectedConsequence()
    {
        if ($this->selectedConsequence !== null) {
            $selectedConsequence = ConsequenceLevel::where('value', $this->selectedConsequence)->first();
            $this->selectedValue = $selectedConsequence->value;
            $this->selectedMeaning = $selectedConsequence->meaning;
            $this->selectedColor = $selectedConsequence->color;
        } else {
            $this->selectedValue = null;
            $this->selectedMeaning = null;
            $this->selectedColor = null;
        }
        $this->emit('selectedValueFour', $this->selectedValue);
    }
}
