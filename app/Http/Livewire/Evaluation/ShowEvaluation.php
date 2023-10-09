<?php

namespace App\Http\Livewire\Evaluation;

use App\Models\Activity;
use App\Models\Company;
use App\Models\Evaluation;
use App\Models\Process;
use App\Models\Task;
use App\Models\User;
use Livewire\Component;

class ShowEvaluation extends Component
{
    public $companies, $processes, $activities, $tasks, $userName;
    public $evaluations;
    public $openProcesses = [];
    protected $listeners = ['render'];

    public function mount($id)
    {
        $this->companies = Company::find($id);
        $this->processes = $this->companies->processes;
        $this->activities = $this->processes->flatMap->activities;
        $this->tasks = $this->activities->flatMap->tasks;
        $this->evaluations = $this->tasks->flatMap->evaluations;

    }
    public function render()
    {
        return view('livewire.evaluation.show-evaluation');
    }
}
