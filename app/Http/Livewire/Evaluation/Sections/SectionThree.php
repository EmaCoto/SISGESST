<?php

namespace App\Http\Livewire\Evaluation\Sections;

use Livewire\Component;

class SectionThree extends Component
{

    public $deficiencyId, $deficiencyValue, $exposureId, $exposureValue, $probabilityId, $probabilityValue;
    public $interventionId, $interventionName, $interventionValue, $consequenceId, $consequenceValue, $aceptavilityId;

    protected $listeners = ['nextPosition3','previousPosition3','riskPartOne','riskPartTwo', 'riskPartThree'];

    public function mount($sectionDeficiencyLevel, $sectionDeficiencyValue, $sectionExposureLevel, $sectionExposureValue, $sectionProbabilityValue,
        $sectionConsequenceLevel, $sectionConsequenceValue, $sectionInterventionValue, $sectionInterventionName)
    {
        $this->deficiencyId = $sectionDeficiencyLevel;
        $this->deficiencyValue = $sectionDeficiencyValue;
        $this->exposureId = $sectionExposureLevel;
        $this->exposureValue = $sectionExposureValue;
        $this->probabilityValue = $sectionProbabilityValue;
        $this->consequenceId = $sectionConsequenceLevel;
        $this->consequenceValue = $sectionConsequenceValue;
        $this->interventionValue = $sectionInterventionValue;
        $this->interventionName = $sectionInterventionName;
    }

    public function nextPosition3()
    {
        $this->emit('sectionThree',[
            'deficiencyLevel' => $this->deficiencyId,
            'deficiencyValue' => $this->deficiencyValue,
            'exposureLevel' => $this->exposureId,
            'exposureValue' => $this->exposureValue,
            'probabilityValue' => $this->probabilityValue,
            'consequenceLevel' => $this->consequenceId,
            'consequenceValue' => $this->consequenceValue,
            'interventionValue' => $this->interventionValue,
            'interventionName' => $this->interventionName,
        ]);
        $this->emit('increasePosition');
    }
    public function previousPosition3()
    {
        $this->emit('decreasePosition');
    }

    public function riskPartOne($dataRiskOne)
    {
        $this->deficiencyId = $dataRiskOne['defiencyId'];
        $this->deficiencyValue = $dataRiskOne['defiencyValue'];
        $this->exposureId = $dataRiskOne['exposureId'];
        $this->exposureValue = $dataRiskOne['exposureValue'];
        $this->probabilityId = $dataRiskOne['probabilityId'];
        $this->probabilityValue = $dataRiskOne['probabilityValue'];

        $this->emit('probabilityData',[
            'probabilityId' => $this->probabilityId,
            'probabilityValue' => $this->probabilityValue,
        ]);
    }

    public function riskPartTwo($dataRiskTwo)
    {
        $this->consequenceId = $dataRiskTwo['consequenceId'];
        $this->consequenceValue = $dataRiskTwo['consecuenteValue'];
        $this->interventionId = $dataRiskTwo['interventionId'];
        $this->interventionName = $dataRiskTwo['interventionName'];
        $this->interventionValue = $dataRiskTwo['interventionValue'];

        $this->emit('interventionData',[
            'interventionName' => $this->interventionName,
        ]);
    }
    public function riskPartThree($dataRiskThree)
    {
        $this->aceptavilityId = $dataRiskThree;
    }

    public function render()
    {
        return view('livewire.evaluation.sections.section-three');
    }
}
