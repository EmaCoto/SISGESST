<?php

namespace App\Http\Livewire\Processes\Tasks;

use App\Models\Task;
use Livewire\Component;

class ShowTask extends Component
{
    public $open = false;
    public $activityId, $activityName;

    public function mount($activityId, $activityName)
    {
        $this->activityId = $activityId;
        $this->activityName = $activityName;

    }
    public function render()
    {
        $tasks = Task::where('activity_id', $this->activityId)->get();
        return view('livewire.processes.tasks.show-task',[
            'tasks' => $tasks,
        ]);
    }
}
