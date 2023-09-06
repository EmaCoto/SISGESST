<?php

namespace App\Http\Livewire\Evaluation;

use App\Models\Evaluation;
use Livewire\Component;

class EvaluationParent extends Component
{

    public $danger, $effects, $source, $means, $individual, $linked, $contractor, $temporary, $time;


    public function save()
    {
        // Validate the input data
        $this->validate([
            'danger' => 'required',
            'effects' => 'required',
            'source' => 'required',
            'means' => 'required',
            'individual' => 'required',
            'linked' => 'required',
            'contractor' => 'required',
            'temporary' => 'required',
            'time' => 'required',
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
        $this->danger = '';
        $this->effects = '';
        $this->source = '';
        $this->means = '';
        $this->individual = '';
        $this->linked = '';
        $this->contractor = '';
        $this->temporary = '';
        $this->time = '';
    }

    public function render()
    {
        return view('livewire.evaluation.evaluation-parent');
    }


}
