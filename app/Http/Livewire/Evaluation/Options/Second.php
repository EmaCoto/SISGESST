<?php

namespace App\Http\Livewire\Evaluation\Options;

use App\Models\ExposureLevel;
use Livewire\Component;

class Second extends Component
{
    public $exposureLevel;
    public $selectedExposure = null;
    public $selectedValue = null;
    public $selectedMeaning = null;
    public $selectedColor = null;

    public function render()
    {
        $this->exposureLevel = ExposureLevel::all();
        return view('livewire.evaluation.options.second');
    }
    public function updatedSelectedExposure()
    {
        if ($this->selectedExposure !== null) {
            $selectedExposureModel = ExposureLevel::where('value', $this->selectedExposure)->first();
            $this->selectedValue = $selectedExposureModel->value;
            $this->selectedMeaning = $selectedExposureModel->meaning;
            $this->selectedColor = $selectedExposureModel->color;
        } else {
            $this->selectedValue = null;
            $this->selectedMeaning = null;
            $this->selectedColor = null;
        }
        $this->emit('selectedValueSecond', $this->selectedValue);
    }
}
