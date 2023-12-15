<?php

namespace App\Http\Livewire\Evaluation;

use Livewire\Component;

class DetailEvaluation extends Component
{
    public $evaluations, $companyId;
    public $openDetail = false;

    public function mount($evaluations, $companyId)
    {
        $this->evaluations = $evaluations;
        $this->companyId = $companyId;
    }

    // public function report()
    // {

    //     $pdf = Pdf::loadView('proof', ['evaluations' => $this->evaluations]);
    // return $pdf->stream('documento.pdf');
    // }

    public function render()
    {
        return view('livewire.evaluation.detail-evaluation');
    }
}
