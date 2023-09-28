<?php

namespace App\Http\Livewire\Evaluation\Options;

use App\Models\ExposureLevel;
use Livewire\Component;

class Second extends Component
{
    public $exposures, $exposureLevel, $exposureValue, $exposureColor, $exposureMeaning;

    public function mount()
    {
        $this->exposures = ExposureLevel::all();
    }

    public function updatedExposureLevel()
    {
        $this->exposureSelected();
    }
    public function exposureSelected()
    {
        $exposureData = ExposureLevel::find($this->exposureLevel);
        $this->exposureValue = $exposureData->value;
        $this->exposureColor = $exposureData->color;
        $this->exposureMeaning = $exposureData->meaning;
        $this->emit('calculateExposure', [
            'exposureId' => $this->exposureLevel,
            'exposureValue' => $this->exposureValue
        ]);
    }

    public function render()
    {
        return view('livewire.evaluation.options.second');
    }
}
