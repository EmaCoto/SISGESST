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
    public $openDelete = false;
    public $processId, $processName, $companyId, $activityDelete;

    protected $listeners = ['processFact'];

    public function processFact($facts)
    {
        $this->processId = $facts['processId'];
        $this->processName = $facts['processName'];
        $this->companyId = $facts['companyId'];

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

    public function confirmDelete($id)
    {
        $this->activityDelete = Activity::find($id);
        $this->openDelete = true; // Abre el modal de confirmación
    }

    public function deleteConfirmed()
    {
        if ($this->activityDelete) {
            $this->activityDelete->delete();
            $this->emitTo('companies.show-company', 'render');
        }
        $this->openDelete = false;
        $this->emit('alertDelete');

    }
}
