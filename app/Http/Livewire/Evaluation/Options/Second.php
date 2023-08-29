<?php

namespace App\Http\Livewire\Evaluation\Options;

use App\Models\ExposureLevel;
use Livewire\Component;

class Second extends Component
{
    public $exposureLevel;

    public function render()
    {
        $this->exposureLevel = ExposureLevel::all();
        return view('livewire.evaluation.options.second');
    }
}
