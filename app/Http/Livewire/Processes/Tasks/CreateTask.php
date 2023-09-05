<?php

namespace App\Http\Livewire\Processes\Tasks;

use App\Models\Activity;
use App\Models\Process;
use App\Models\Task;
use Livewire\Component;

class CreateTask extends Component
{
    public $open = false;
    public $name, $description, $activity_id;
    public $companyProcessId, $processes, $selectedActivity;

    protected $listeners = ['selectedActivity'];

    public function mount($companyId)
    {
        $this->companyProcessId = $companyId;
        $this->processes = Process::where('company_id', $this->companyProcessId)->get();

        $this->selectedActivity();
    }
    
    public function selectedActivity()
    {
        $this->selectedActivity = Activity::whereIn('process_id', $this->processes->pluck('id'))->get();
    }

    public function save()
    {
        Task::create([
            'name' => $this->name,
            'description' => $this->description,
            'activity_id' => $this->activity_id,
        ]);

        $this->reset(['open', 'name', 'description', 'activity_id']);
    }


    public function render()
    {
        return view('livewire.processes.tasks.create-task');
    }
}
