<?php

namespace App\Http\Livewire\Processes\Activities;

use App\Models\Activity;
use Livewire\Component;

class ShowActivity extends Component
{

    public function render()
    {
        $activities = Activity::all();
        return view('livewire.processes.activities.show-activity', compact('activities'));
    }
}
