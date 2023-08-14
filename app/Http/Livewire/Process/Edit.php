<?php

namespace App\Http\Livewire\Process;

use Livewire\Component;

class Edit extends Component
{
    public $processes;
    public $open = false;

    public function render()
    {
        return view('livewire.process.edit');
    }
}
