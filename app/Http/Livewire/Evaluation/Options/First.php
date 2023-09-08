<?php

namespace App\Http\Livewire\Evaluation\Options;

use App\Models\DeficiencyLevel;
use Livewire\Component;

class First extends Component
{
    public $deficiencyLevel;
    public $selectedDeficiency = null;
    public $selectedValue = null;
    public $selectedMeaning = null;
    public $selectedColor = null;



    public function updatedSelectedDeficiency()
    {
        if ($this->selectedDeficiency !== null) {
            $selectedDeficiency = DeficiencyLevel::where('value', $this->selectedDeficiency)->first();
            $this->selectedValue = $selectedDeficiency->value;
            $this->selectedMeaning = $selectedDeficiency->meaning;
            $this->selectedColor = $selectedDeficiency->color;
        } else {
            $this->selectedValue = null;
            $this->selectedMeaning = null;
            $this->selectedColor = null;
        }
        $this->emit('selectedValueFirst', $this->selectedValue);
    }
    
    public function render()
    {
        $this->deficiencyLevel = DeficiencyLevel::all();
        return view('livewire.evaluation.options.first');
    }
}
