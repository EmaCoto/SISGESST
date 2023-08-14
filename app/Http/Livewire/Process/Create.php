<?php

namespace App\Http\Livewire\Process;

use Livewire\Component;

class Create extends Component
{
    public $open = false;
    public function render()
    {
        return view('livewire.process.create');
    }
}
