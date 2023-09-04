<?php

namespace App\Http\Livewire\Processes\Activities;

use App\Models\Activity;
use App\Models\Process;
use Livewire\Component;
use Livewire\WithPagination;

class ShowActivity extends Component
{
    use WithPagination;

    // public $processes, $selectedProcess, $process_id, $activities;
    public $processId, $processName;

    protected $listeners = ['processFact'];

    public function processFact($facts)
    {
        $this->processId = $facts['processId'];
        $this->processName = $facts['processName'];

    }

    // public function mount($processId)
    // {
    //     $this->processId = $processId;
    // }

    public function render()
    {
        $activities = Activity::where('process_id', $this->processId)->paginate(5);

        return view('livewire.processes.activities.show-activity', [
            'activities' => $activities,
        ]);
    }
}
