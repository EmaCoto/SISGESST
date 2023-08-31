<?php

namespace App\Http\Livewire\Processes\Activities;

use Livewire\Component;

class CreateActivity extends Component
{
    public $open = false;

    public function render()
    {
        return view('livewire.processes.activities.create-activity');
    }
}
