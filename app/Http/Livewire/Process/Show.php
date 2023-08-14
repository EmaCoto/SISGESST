<?php

namespace App\Http\Livewire\Process;

use Livewire\Component;

class Show extends Component
{
    public $open = false;
    public $processes;


    public function render()
    {
        return view('livewire.process.show');
    }
}
