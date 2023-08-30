<?php

namespace App\Http\Livewire\Evaluation\Options;

use App\Models\ConsequenceLevel;
use Livewire\Component;

class Fourth extends Component
{
    public $consequenceLevel;
    public $selectedConsequence = null;
    public $selectedValue = null;

    public function render()
    {
        $this->consequenceLevel = ConsequenceLevel::all();
        return view('livewire.evaluation.options.fourth');
    }
    public function updatedSelectedConsequence()
    {
        if ($this->selectedConsequence !== null) {
            $selectedConsequenceModel = ConsequenceLevel::where('value', $this->selectedConsequence)->first();
            $this->selectedValue = $selectedConsequenceModel->value;
        } else {
            $this->selectedValue = null;
        }
    }
}
