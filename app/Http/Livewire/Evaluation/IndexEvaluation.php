<?php

namespace App\Http\Livewire\Evaluation;

use App\Models\Activity;
use App\Models\DangerDescription;
use App\Models\Process;
use App\Models\Task;
use Livewire\Component;

class IndexEvaluation extends Component
{
    public $processId;
    public $sectionPosition = 1;

    public $taskId, $dangerClassification, $dangerDescription;

    protected $listeners = ['increasePosition', 'decreasePosition', 'sectionOne'];

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
    public function sectionOne($data)
    {
        $this->taskId = $data['taskId'];
        $this->dangerClassification = $data['dangerClassification'];
        $this->dangerDescription = $data['dangerDescription'];
    }

    public function render()
    {
        return view('livewire.evaluation.index-evaluation');
    }
}
