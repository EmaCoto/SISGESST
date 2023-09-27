<?php

namespace App\Http\Livewire\Evaluation;

use Livewire\Component;

class IndexEvaluation extends Component
{
    public $processId;
    public $sectionPosition = 1;

    public $activityId, $activityName, $taskId, $dangerClassification, $dangerDescription;

    public $danger, $effects, $source, $means, $individual;
    public $linked, $contractor, $temporary, $time;

    public $removal, $removalSuggestion, $replacement, $replacementSuggestion, $engineeringControl, $engineeringControlSuggestion,
            $administrativeControl, $administrativeControlSuggestion, $personalProtection, $personalProtectionSuggestion;

    protected $listeners = [
        'increasePosition',
        'decreasePosition',
        'sectionOne',
        'sectionTwo',
        'sectionThree',
        'sectionFour',
        'sectionFive',

    ];

    public function mount($id)
    {
        $this->processId = $id;
    }

    //metodos para cambiar de posicion en las secciones
    public function increasePosition()
    {
        $this->sectionPosition++;
    }

    public function decreasePosition()
    {
        if($this->sectionPosition > 1)
        {
            $this->sectionPosition--;
        }

    }

    public function nextSection()
    {
        $this->emit('nextPosition'.$this->sectionPosition);
    }
    public function previousSection()
    {
        $this->emit('previousPosition'.$this->sectionPosition);
    }

    //metodos para recibir la informacion de las secciones
    public function sectionOne($dataOne)
    {
        $this->activityId = $dataOne['activityId'];
        $this->taskId = $dataOne['taskId'];
        $this->dangerClassification = $dataOne['dangerClassification'];
        $this->dangerDescription = $dataOne['dangerDescription'];
    }

    public function sectionTwo($dataTwo)
    {
        $this->danger = $dataTwo['danger'];
        $this->effects = $dataTwo['effects'];
        $this->source = $dataTwo['source'];
        $this->means = $dataTwo['means'];
        $this->individual = $dataTwo['individual'];
    }
    public function sectionFour($dataFour)
    {
        $this->linked = $dataFour['linked'];
        $this->contractor = $dataFour['contractor'];
        $this->temporary = $dataFour['temporary'];
        $this->time = $dataFour['time'];
    }

    public function sectionFive($dataFive)
    {
        $this->removal = $dataFive['removal'];
        $this->removalSuggestion = $dataFive['removalSuggestion'];
        $this->replacement = $dataFive['replacement'];
        $this->replacementSuggestion = $dataFive['replacementSuggestion'];
        $this->engineeringControl = $dataFive['engineeringControl'];
        $this->engineeringControlSuggestion = $dataFive['engineeringControlSuggestion'];
        $this->administrativeControl = $dataFive['administrativeControl'];
        $this->administrativeControlSuggestion = $dataFive['administrativeControlSuggestion'];
        $this->personalProtection = $dataFive['personalProtection'];
        $this->personalProtectionSuggestion = $dataFive['personalProtectionSuggestion'];
    }

    public function render()
    {
        return view('livewire.evaluation.index-evaluation');
    }
}
