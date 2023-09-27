<?php

namespace App\Http\Livewire\Evaluation;

use Livewire\Component;

class IndexEvaluation extends Component
{
    public $processId;
    public $sectionPosition = 5;

    public $activityId, $activityName, $taskId, $dangerClassification, $dangerDescription;

    public $danger, $effects, $source, $means, $individual;
    public $linked, $contractor, $temporary, $time;

    protected $listeners = [
        'increasePosition',
        'decreasePosition',
        'sectionOne',
        'sectionTwo',
        'sectionThree',
        'sectionFour',

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

    public function render()
    {
        return view('livewire.evaluation.index-evaluation');
    }
}
