<?php

namespace App\Http\Livewire\Evaluation\Options;

use App\Models\ConsequenceLevel;
use Livewire\Component;

class Fourth extends Component
{
    public $selectedName;

    public function render()
    {
        $consequenceLevels = ConsequenceLevel::all();

        $selectedConsequenceLevel = $consequenceLevels->firstWhere('name', $this->selectedName);

        return view('livewire.evaluation.options.fourth', [
            'consequenceLevels' => $consequenceLevels,
            'selectedMeaning' => $selectedConsequenceLevel ? $selectedConsequenceLevel->meaning : '',
            'selectedColor' => $selectedConsequenceLevel ? $selectedConsequenceLevel->color : '',
            'selectedValue' => $selectedConsequenceLevel ? $selectedConsequenceLevel->value : '',

        ]);
    }
}
