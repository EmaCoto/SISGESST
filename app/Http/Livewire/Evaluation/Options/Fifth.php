<?php

namespace App\Http\Livewire\Evaluation\Options;

use App\Models\InterventionRiskLevel;
use Livewire\Component;

class Fifth extends Component
{
    public $interventionRisks, $interventionName, $interventionValueResult, $interventionColor, $interventionMeaning;
    public $probabilityConsequenceResult, $valueOne, $valueTwo;
    public $consequenceId, $consequenceValue, $probabilityId, $probabilityValue;

    protected $listeners = ['probabilityData', 'calculateConsequence'];

    public function mount()
    {
        $this->interventionRisks = InterventionRiskLevel::all();
    }

    public function probabilityData($dataProbability)
    {
        $this->probabilityId = $dataProbability['probabilityId'];
        $this->probabilityValue = $dataProbability['probabilityValue'];
        $this->calculateInterventionRisk();
    }
    public function calculateConsequence($dataConsequence)
    {
        $this->consequenceId = $dataConsequence['consequenceId'];
        $this->consequenceValue = $dataConsequence['consequenceValue'];
        $this->calculateInterventionRisk();
    }

    public function calculateInterventionRisk()
    {
        $this->probabilityConsequenceResult = $this->probabilityValue * $this->consequenceValue;

        foreach ($this->interventionRisks as $intervention) {

            list($this->valueOne, $this->valueTwo) = explode("-", $intervention->value);

            if ($this->probabilityConsequenceResult <= $this->valueOne and $this->probabilityConsequenceResult >= $this->valueTwo) {
                $this->interventionName = $intervention->name;
                $this->interventionValueResult = $this->probabilityConsequenceResult;
                $this->interventionColor = $intervention->color;
                $this->interventionMeaning = $intervention->meaning;

                $this->emit('riskPartTwo', [
                    'consequenceId' => $this->consequenceId,
                    'consecuenteValue' => $this->consequenceValue,
                    'interventionId' => $intervention->id,
                    'interventionName' => $this->interventionName,
                    'interventionValue' => $this->interventionValueResult,

                ]);
            }
        }
    }

    public function render()
    {
        return view('livewire.evaluation.options.fifth');
    }
}
