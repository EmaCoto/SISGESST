<?php

namespace App\Http\Livewire\Evaluation;

use App\Models\Evaluation;
use Livewire\Component;

class EvaluationParent extends Component
{
    public $currentSection = 1;
    public $danger, $effects, $source, $means, $individual, $linked, $contractor, $temporary, $time, $elimination, $substitution, $engineeringControls, $administrativeControls, $personalProtection, $legal;

    public function save()
    {

        $this->validate([
            'danger' => 'required',
            'effects' => 'required',
            'source' => 'required',
            'means' => 'required',
            'individual' => 'required',
            'linked' => 'required|numeric',
            'contractor' => 'required|numeric',
            'temporary' => 'required|numeric',
            'time' => 'required|regex:/^\d{2}:\d{2}$/',
            'elimination' => 'required',
            'substitution' => 'required',
            'engineeringControls' => 'required',
            'administrativeControls' => 'required',
            'personalProtection' => 'required',
            'legal' => 'required',
        ]);

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
            'elimination' => $this->elimination,
            'substitution' => $this->substitution,
            'engineering_controls' => $this->engineeringControls,
            'administrative_controls' => $this->administrativeControls,
            'personal_protection' => $this->personalProtection,
            'compliance_legal' => $this->legal,
        ]);

        $this->reset('danger','effects','source','means', 'individual', 'linked', 'contractor', 'temporary', 'time', 'elimination', 'substitution', 'engineeringControls', 'administrativeControls', 'personalProtection', 'legal');
    }
    public function nextSection()
    {
        if ($this->currentSection < 2) {
            $this->currentSection++;
        }
    }

    public function previousSection()
    {
        if ($this->currentSection > 1) {
            $this->currentSection--;
        }
    }
    public function render()
    {
        return view('livewire.evaluation.evaluation-parent', [
            'currentSection' => $this->currentSection,
        ]);
    }
}
