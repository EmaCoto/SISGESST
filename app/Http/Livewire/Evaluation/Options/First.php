<?php

namespace App\Http\Livewire\Evaluation\Options;

use App\Models\DeficiencyLevel;
use Livewire\Component;

class First extends Component
{

    public $deficiencyLevel;

    public function render()
    {
        $this->deficiencyLevel = DeficiencyLevel::all();
        return view('livewire.evaluation.options.first');
    }
}
