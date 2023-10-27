<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Evaluation;
use Barryvdh\DomPDF\Facade\Pdf;

class ProofController extends Controller
{
    public  $evaluations;
    // public function report($id)
    // {
    //     $this->companyId = $id;
    //     $this->companies = Company::find($this->companyId);
    //     $this->processes = $this->companies->processes;
    //     $this->activities = $this->processes->flatMap->activities;
    //     $this->tasks = $this->activities->flatMap->tasks;
    //     $this->evaluations = $this->tasks->flatMap->evaluations;
    //     $tasks = $this->tasks;
    //     $evaluations = $this->evaluations;

    //     $pdf = Pdf::loadView('proof', compact('evaluations'));
    //     return $pdf->stream('EvaluacionMatrizDeRiesgo.pdf');
    // }

    public function index()
    {
        $evaluation = Evaluation::find(7);
        return view('proof', compact('evaluation'));
    }
}
