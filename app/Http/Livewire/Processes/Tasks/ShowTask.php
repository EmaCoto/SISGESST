<?php

namespace App\Http\Livewire\Processes\Tasks;

use Livewire\Component;

class ShowTask extends Component
{
    public $open = false;
    public function render()
    {
        return view('livewire.processes.tasks.show-task');
    }
}
