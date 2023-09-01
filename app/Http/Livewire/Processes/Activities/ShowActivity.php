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
    public $processId;

    // public function mount($companyId)
    // {
    //     $this->companyId = $companyId;
    //     $this->processesId();
    //     $this->selectedActivity();
    // }

    // protected $listeners = ['showActivity'];


    // public function showActivity($processId)
    // {
    //     $this->reset('selectedProcess'); // Limpiar el valor anterior
    //     $this->selectedProcess = $processId;
    //     $this->activities = Activity::where('process_id', $this->selectedProcess)->get();

    //     $this->emit('displayActivities');
    // }

    public function mount($processId)
    {
        $this->processId = $processId;
    }

    public function render()
    {
        // Aquí puedes usar $this->processId para buscar las actividades relacionadas con el proceso.
        // Por ejemplo:
        $activities = Activity::where('process_id', $this->processId)->get();

        return view('livewire.processes.activities.show-activity', [
            'activities' => $activities,
        ]);
    }


    // public function render()
    // {
    //     return view('livewire.processes.activities.show-activity');
    // }

    // public function mount($processId)
    // {
    //     $this->reset('processId');
    //     $this->processId = $processId;
    //     $this->activities = Activity::where('process_id', $this->processId)->get();
    // }

    // public function selectedActivity()
    // {
    //     $this->selectedProcess = $this->process_id;
    //     $this->activities = Activity::where('process_id', $this->selectedProcess)->get();
    // }

    // public function processesId()
    // {
    //     $this->processes = Process::where('company_id', $this->companyId)->get();

    // }
}
