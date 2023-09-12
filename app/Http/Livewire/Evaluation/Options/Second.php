<?php

namespace App\Http\Livewire\Evaluation\Options;

use App\Models\ExposureLevel;
use Livewire\Component;

class Second extends Component
{
    public $selectedName;

    protected $rules = [
        'meaning',
        'color',
        'value',
    ];

    public function render()
    {
        $exposureLevels = ExposureLevel::all();

        $selectedExposureLevel = $exposureLevels->firstWhere('name', $this->selectedName);

        return view('livewire.evaluation.options.second', [
            'exposureLevels' => $exposureLevels,
            'selectedMeaning' => $selectedExposureLevel ? $selectedExposureLevel->meaning : '',
            'selectedColor' => $selectedExposureLevel ? $selectedExposureLevel->color : '',
            'selectedValue' => $selectedExposureLevel ? $selectedExposureLevel->value : '',

        ]);
    }
}
