<?php

namespace App\Http\Livewire\Evaluation;

use App\Models\DeficiencyLevel;
use App\Models\Evaluation;
use Livewire\Component;

class EvaluationParent extends Component
{
    public $deficiency;
    public $danger, $effects, $source, $means, $individual, $linked, $contractor, $temporary, $time;

    // public function mount()
    // {
    //     $this->deficiency = DeficiencyLevel::all();
    // }
    public function save()
    {
        // Validate the input data
        $this->validate([
            'danger' => 'required',
            'effects' => 'required',
            'source' => 'required',
            'means' => 'required',
            'individual' => 'required',
            'linked' => 'required|regex:/^\d{1,3}(?:\.\d{3})*(?:,\d{2})?$/',
            'contractor' => 'required',
            'temporary' => 'required',
            'time' => 'required|regex:/^\d{2}:\d{2}$/',

        ]);

        // Create a new Evaluation model instance and save the data
        Evaluation::create([
            'danger' => $this->danger,
            'effects' => $this->effects,
            'source' => $this->source,
            'means' => $this->means,
            'individual' => $this->individual,
            'linked' => $this->linked,
            'contractor' => $this->contractor,
            'temporary' => $this->temporary,
            'time' => $this->time,
        ]);

        // Reset the input fields after saving
        $this->reset('danger','effects','source','means', 'individual', 'linked', 'contractor', 'temporary', 'time');
    }

    public function render()
    {
        return view('livewire.evaluation.evaluation-parent', [
            'deficiency' => $this->deficiency,
        ]);;
    }
}
