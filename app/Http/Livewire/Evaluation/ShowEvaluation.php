<?php

namespace App\Http\Livewire\Evaluation;

use App\Models\Company;
use Livewire\Component;

class ShowEvaluation extends Component
{
    public $company, $activity, $task;
    public $openProcesses = [];
    protected $listeners = ['render'];

    public function mount($id)
    {
        $this->company = Company::find($id);
    }
    public function render()
    {
        return view('livewire.evaluation.show-evaluation');
    }
}
