<?php

namespace App\Http\Livewire\Processes\Tasks;

use Livewire\Component;

class EditTask extends Component
{
    public $openEditTask = false;

    public function render()
    {
        return view('livewire.processes.tasks.edit-task');
    }
}
