<?php

namespace App\Http\Livewire\Processes\Tasks;

use Livewire\Component;

class CreateTask extends Component
{
    public $open = false;

    public function render()
    {
        return view('livewire.processes.tasks.create-task');
    }
}
