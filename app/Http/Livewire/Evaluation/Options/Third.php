<?php

namespace App\Http\Livewire\Evaluation\Options;

use App\Models\ProbabilityLevel;
use Livewire\Component;

class Third extends Component
{
    public $probabilityLevels, $exposureDeficiencyResult, $probabilityName, $probabilityColor, $probabilityMeaning;
    public $valueOne, $valueTwo, $probabilityValueResult;
    public $defiencyId, $defiencyValue, $exposureId, $exposureValue;

    protected $listeners = ['calculateDeficiency', 'calculateExposure'];

    public function mount(){
        $this->probabilityLevels = ProbabilityLevel::all();
    }

    public function calculateDeficiency($dataDeficiency)
    {
        $this->defiencyId = $dataDeficiency['deficiencyId'];
        $this->defiencyValue = $dataDeficiency['deficiencyValue'];
        $this->calculateProbability();
    }
    public function calculateExposure($dataExposure)
    {
        $this->exposureId = $dataExposure['exposureId'];
        $this->exposureValue = $dataExposure['exposureValue'];
        $this->calculateProbability();
    }

    public function calculateProbability()
    {
        $this->exposureDeficiencyResult = $this->defiencyValue * $this->exposureValue;

        foreach($this->probabilityLevels as $probability){

            list($this->valueOne, $this->valueTwo) = explode("-", $probability->value);

            if($this->exposureDeficiencyResult <= $this->valueOne and $this->exposureDeficiencyResult >= $this->valueTwo){
                $this->probabilityName = $probability->name;
                $this->probabilityValueResult = $this->exposureDeficiencyResult;
                $this->probabilityColor = $probability->color;
                $this->probabilityMeaning = $probability->meaning;

                $this->emit('riskPartOne', [
                    'defiencyId' => $this->defiencyId,
                    'defiencyValue' => $this->defiencyValue,
                    'exposureId' => $this->exposureId,
                    'exposureValue' => $this->exposureValue,
                    'probabilityId' => $probability->id,
                    'probabilityValue' => $this->probabilityValueResult,
                ]);

            }elseif($this->exposureDeficiencyResult === 0){
                $this->reset('probabilityName','probabilityValueResult','probabilityColor','probabilityMeaning');
            }
        }
    }

    public function render()
    {
        return view('livewire.evaluation.options.third');
    }
}
