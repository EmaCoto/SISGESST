<?php

namespace App\Http\Livewire\Evaluation;


use Livewire\Component;

class DetailEvaluation extends Component
{
    public $evaluations;
    public $openDetail = false;

    public function mount($evaluations)
    {
        $this->evaluations = $evaluations;
    }

    public function render()
    {
        return view('livewire.evaluation.detail-evaluation');
    }
}
