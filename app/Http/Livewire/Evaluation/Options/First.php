<?php

namespace App\Http\Livewire\Evaluation\Options;

use App\Models\DeficiencyLevel;
use Livewire\Component;

class First extends Component
{

    public $deficiencyLevel;
    public $selectedDeficiency = null;
    public $selectedValue = null;

    public function render()
    {
        $this->deficiencyLevel = DeficiencyLevel::all();
        return view('livewire.evaluation.options.first');
    }

    public function updatedSelectedDeficiency()
    {
        if ($this->selectedDeficiency !== null) {
            $selectedDeficiencyModel = DeficiencyLevel::where('value', $this->selectedDeficiency)->first();
            $this->selectedValue = $selectedDeficiencyModel->value;
        } else {
            $this->selectedValue = null;
        }
        $this->emit('selectedValueFirst', $this->selectedValue);
    }
}
