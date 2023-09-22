<?php

namespace App\Http\Livewire\Evaluation;

use App\Models\Process;
use Livewire\Component;

class IndexEvaluation extends Component
{
    public $processId, $processName;

    public function mount($id){
        $this->processId = $id;
        $process = Process::find($id);
        $this->processName = $process->name;
    }
    public function render()
    {
        return view('livewire.evaluation.index-evaluation');
    }
}
