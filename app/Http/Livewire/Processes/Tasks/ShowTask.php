<?php

namespace App\Http\Livewire\Processes\Tasks;

use App\Models\Task;
use Livewire\Component;

class ShowTask extends Component
{
    public $open = false, $openDelete = false;
    public $activityId, $activityName, $taskDelete, $companyId;

    public function mount($activityId, $activityName, $companyId)
    {
        $this->activityId = $activityId;
        $this->activityName = $activityName;
        $this->companyId = $companyId;

    }
    public function render()
    {
        $tasks = Task::where('activity_id', $this->activityId)->get();
        return view('livewire.processes.tasks.show-task',[
            'tasks' => $tasks,
        ]);
    }

    public function confirmDelete($id)
    {
        $this->taskDelete = Task::find($id);
        $this->openDelete = true; // Abre el modal de confirmación
    }

    public function deleteConfirmed()
    {
        if ($this->taskDelete) {
            $this->taskDelete->delete();
            $this->emitTo('companies.show-company', 'render');
        }
        $this->openDelete = false; // Cierra el modal de confirmación
    }
}
