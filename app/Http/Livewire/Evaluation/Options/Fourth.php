<?php

namespace App\Http\Livewire\Evaluation\Options;

use App\Models\ConsequenceLevel;
use Livewire\Component;

class Fourth extends Component
{
    public $consequenceLevel;
    public function render()
    {
        $this->consequenceLevel = ConsequenceLevel::all();
        return view('livewire.evaluation.options.fourth');
    }
}
