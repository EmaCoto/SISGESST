<?php

namespace App\Http\Livewire\Evaluation\Sections;

use Livewire\Component;

class SectionThree extends Component
{

    public $defiencyId, $defiencyValue, $exposureId, $exposureValue, $probabilityId, $probabilityValue;
    public $interventionId, $interventionName, $interventionValue, $consequenceId, $consecuenteValue, $aceptabilityId;

    protected $listeners = ['nextPosition3','previousPosition3','riskPartOne','riskPartTwo', 'riskPartThree'];

    public function mount($sectionDeficiencyLevel, $sectionExposureLevel){
        $this->defiencyId = $sectionDeficiencyLevel;
        $this->exposureId = $sectionExposureLevel;
    }

    public function nextPosition3()
    {
        $this->emit('sectionThree',[
            'deficiencyLevel' => $this->defiencyId,
            'exposureLevel' => $this->exposureId,
            // 'probabilityLevel'
            // 'consequenceLevel'
        ]);
        $this->emit('increasePosition');
    }
    public function previousPosition3()
    {
        $this->emit('decreasePosition');
    }

    public function riskPartOne($dataRiskOne)
    {
        $this->defiencyId = $dataRiskOne['defiencyId'];
        $this->defiencyValue = $dataRiskOne['defiencyValue'];
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
        $this->consecuenteValue = $dataRiskTwo['consecuenteValue'];
        $this->interventionId = $dataRiskTwo['interventionId'];
        $this->interventionName = $dataRiskTwo['interventionName'];
        $this->interventionValue = $dataRiskTwo['interventionValue'];

        $this->emit('interventionData',[
            'interventionName' => $this->interventionName,
        ]);
    }
    public function riskPartThree($dataRiskThree)
    {
        $this->aceptabilityId = $dataRiskThree;
    }

    public function render()
    {
        return view('livewire.evaluation.sections.section-three');
    }
}
