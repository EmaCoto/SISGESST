<?php

namespace App\Http\Livewire\Evaluation\Text;

use Livewire\Component;

class Danger extends Component
{
    public $danger;

    public function updatedDanger()
    {
        $this->emit('updatedDanger', ['danger' => $this->danger]);
    }
    public function render()
    {
        return view('livewire.evaluation.text.danger');
        $this->updatedDanger();
    }
}
