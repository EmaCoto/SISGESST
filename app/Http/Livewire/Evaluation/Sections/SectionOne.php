<?php

namespace App\Http\Livewire\Evaluation\Sections;

use App\Models\Activity;
use App\Models\DangerDescription;
use App\Models\Process;
use App\Models\Task;
use Livewire\Component;

class SectionOne extends Component
{
    public $processId, $processName, $activities, $activityId, $actiId, $tasks, $taskId, $dangers, $dangerClassification, $dangerDescription, $danger_descriptions;

    public $taskName;
    public $activityName;
    public $descriptionName;
    public $previousTask, $previousDangerClassification, $previousDangerDescription;
    protected $listeners = ['nextPosition1'];

    public function mount($id, $sectionActivityId, $sectionTaskId, $sectionDangerClassification, $sectionDangerDescription)
    {
        //Process
        $this->processId = $id;
        $process = Process::find($id);
        $this->processName = $process->name;

        //Activity
        $this->activities = Activity::where('process_id', $id)->get();
        $this->activityId = $sectionActivityId;
        $activity = Activity::find($sectionActivityId);
        $this->activityName = $activity ? $activity->name : '';

        //Task
        $this->taskId = $sectionTaskId;
        $task = Task::find($sectionTaskId);
        $this->taskName = $task ? $task->name : '';

        //Danger Description
        $this->dangerClassification = $sectionDangerClassification;
        $this->dangerDescription = $sectionDangerDescription;
        $description = DangerDescription::find($sectionDangerDescription);
        $this->descriptionName = $description ? $description->danger_description : '';
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
        $this->emit('sectionOne', [
            'activityId' => $this->activityId,
            'taskId' => $this->taskId,
            'dangerClassification' => $this->dangerClassification,
            'dangerDescription' => $this->dangerDescription
        ]);
        $this->emit('increasePosition');
    }


    public function render()
    {
        return view('livewire.evaluation.sections.section-one');
    }
}
