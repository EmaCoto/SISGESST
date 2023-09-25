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

    protected $listeners = ['increasePosition', 'decreasePosition'];

    public function mount($id)
    {
        //Process
        $this->processId = $id;
    }

    public function increasePosition()
    {
        $this->sectionPosition++;
    }

    public function decreasePosition()
    {
        $this->sectionPosition--;

    }

    public function nextSection()
    {
        $this->emit('nextPosition'.$this->sectionPosition);
    }
    public function previousSection()
    {
        $this->emit('previousPosition'.$this->sectionPosition);
    }
    public function render()
    {
        return view('livewire.evaluation.index-evaluation');
    }
}
