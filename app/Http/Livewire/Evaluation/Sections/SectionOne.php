<?php

namespace App\Http\Livewire\Evaluation\Sections;

use App\Models\Activity;
use App\Models\DangerDescription;
use App\Models\Process;
use App\Models\Task;
use Livewire\Component;

class SectionOne extends Component
{
    public $processId, $processName, $activities, $activityId,$actiId, $tasks, $taskId, $dangers, $dangerClassification, $danger_description, $danger_descriptions;
    protected $listeners = ['nextPosition1'];

    public function mount($id)
    {
        //Process
        $this->processId = $id;
        $process = Process::find($id);
        $this->processName = $process->name;

        //Activity
        $this->activities = Activity::where('process_id', $id)->get();
    }

    public function updatedDangerClassification()
    {
        $this->dangerDescription();
    }
    public function dangerDescription()
    {
        $this->danger_descriptions = DangerDescription::where('danger', $this->dangerClassification)->get();
    }

    public function updatedActivityId()
    {
        $this->activityTask();
    }
    public function activityTask()
    {
        $this->tasks = Task::where('activity_id', $this->activityId)->get();
    }

    public function nextPosition1()
    {
        $this->emit('increasePosition');
    }


    public function render()
    {
        return view('livewire.evaluation.sections.section-one');
    }
}
