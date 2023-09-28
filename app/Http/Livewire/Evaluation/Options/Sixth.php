<?php

namespace App\Http\Livewire\Evaluation\Options;

use App\Models\RiskAcceptability;
use Livewire\Component;

class Sixth extends Component
{
    public $riskAceptabilities,$aceptabilityColor, $aceptabilityMeaning;
    public $interventionName;

    protected $listeners = ['interventionData'];

    public function mount()
    {
        $this->riskAceptabilities = RiskAcceptability::all();
    }

    public function interventionData($dataIntervention)
    {
        $this->interventionName = $dataIntervention['interventionName'];
        $this->aceptabilityRisk();
    }

    public function aceptabilityRisk()
    {
        foreach($this->riskAceptabilities as $aceptavility){
            if($this->interventionName == $aceptavility->name){
                $this->aceptabilityColor = $aceptavility->color;
                $this->aceptabilityMeaning = $aceptavility->meaning;

                $this->emit('riskPartThree', $aceptavility->id);
            }
        }
    }

    public function render()
    {
        return view('livewire.evaluation.options.sixth');
    }
}
