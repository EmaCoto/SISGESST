<?php

namespace App\Http\Livewire\Evaluation\Options;

use App\Models\ConsequenceLevel;
use Livewire\Component;

class Fourth extends Component
{
    public $consequenceLevel, $consequenceLevels, $consequenceValue, $consequenceColor, $consequenceyMeaning;

    public function mount()
    {
        $this->consequenceLevels = ConsequenceLevel::all();
    }

    public function updatedConsequenceLevel()
    {
        $this->consequenceSelected();
    }
    public function consequenceSelected()
    {
        $consequenceData = ConsequenceLevel::find($this->consequenceLevel);
        $this->consequenceValue = $consequenceData->value;
        $this->consequenceColor = $consequenceData->color;
        $this->consequenceyMeaning = $consequenceData->meaning;
        $this->emit('calculateConsequence', [
            'consequenceId' => $this->consequenceLevel,
            'consequenceValue' => $this->consequenceValue
        ]);
    }

    public function render()
    {
        return view('livewire.evaluation.options.fourth');
    }
}
