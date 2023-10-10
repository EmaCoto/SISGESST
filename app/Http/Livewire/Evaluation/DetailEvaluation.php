<?php

namespace App\Http\Livewire\Evaluation;

use App\Models\Company;
use App\Models\DangerDescription;
use Livewire\Component;

class DetailEvaluation extends Component
{
    public $processName, $companies, $processes, $activities, $tasks, $evaluations;
    public $dangerDescription;
    public $openDetail = false;

    public function mount($evaluations)
    {
        $this->evaluations = $evaluations;

        $this->dangerDescription = DangerDescription::find($this->evaluations->id_danger_description);
    }

    public function render()
    {
        return view('livewire.evaluation.detail-evaluation');
    }
}
