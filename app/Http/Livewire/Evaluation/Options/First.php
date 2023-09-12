<?php

namespace App\Http\Livewire\Evaluation\Options;

use App\Models\DeficiencyLevel;
use Livewire\Component;

class First extends Component
{
    public $selectedName;

    public function render()
    {
        $deficiencyLevels = DeficiencyLevel::all();
        $selectedDeficiencyLevel = $deficiencyLevels->firstWhere('name', $this->selectedName);

        return view('livewire.evaluation.options.first', [
            'deficiencyLevels' => $deficiencyLevels,
            'selectedMeaning' => $selectedDeficiencyLevel ? $selectedDeficiencyLevel->meaning : '',
            'selectedColor' => $selectedDeficiencyLevel ? $selectedDeficiencyLevel->color : '',
            'selectedValue' => $selectedDeficiencyLevel ? $selectedDeficiencyLevel->value : '',

        ]);
    }
}
