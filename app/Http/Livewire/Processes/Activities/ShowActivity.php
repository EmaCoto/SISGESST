<?php

namespace App\Http\Livewire\Processes\Activities;

use App\Models\Activity;
use App\Models\Process;
use Livewire\Component;
use Livewire\WithPagination;

class ShowActivity extends Component
{
    use WithPagination;

    public $listeners = ['ShowActivityId'];
    public $process  = '';
    public $activities = [];

    // public function mount(){
    //     dd($this->processId);
    // }

    public function ShowActivityId($process)
    {

        $this->process = $process;
        $this->activities = [];
        $this->activities = Activity::where('process_id', $this->process)->get();
        // dd($this->activities->count());
        // dd($this->process);
        // if(!is_null($this->process)){
        //     $this->activities = Activity::where('process_id', $this->process)->get();
        // }

    }


    public function render()
    {
        // if(is_null($this->process) || $this->process == ''){
        //     $activities = [];
        // }

        return view('livewire.processes.activities.show-activity');
    }
}
