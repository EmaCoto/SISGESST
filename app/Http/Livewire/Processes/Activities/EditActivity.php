<?php

namespace App\Http\Livewire\Processes\Activities;

use Livewire\Component;

class EditActivity extends Component
{
    public $open = false;
    public $activity, $activityId, $name, $description, $processes;

    protected $rules = [
        'name'              => 'required',
        'description'       => 'required',
    ];

    public function mount($activity)
    {
        $this->activity = $activity;

        $this->activityId = $activity->id;
        $this->name = $activity->name;
        $this->description = $activity->description;
    }

    public function update()
    {
        $this->validate();

        $this->activity->update([
            'name'             => $this->name,
            'description'      => $this->description,
        ]);

        $this->reset('open');
        $this->emit('render');
    }

    public function render()
    {
        return view('livewire.processes.activities.edit-activity');
    }
}
