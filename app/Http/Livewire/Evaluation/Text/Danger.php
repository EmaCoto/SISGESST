<?php

namespace App\Http\Livewire\Evaluation\Text;

use Livewire\Component;

class Danger extends Component
{
    public $danger;
    protected $rules = [
        'danger' => 'required|min:6'
    ];

    public function updatedDanger()
    {
        $this->validate();
        $this->emit('updatedDanger', $this->danger);
    }
    public function render()
    {
        return view('livewire.evaluation.text.danger');
        $this->updatedDanger();
    }
}
