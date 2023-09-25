<?php

namespace App\Http\Livewire\Evaluation\Sections;

use Livewire\Component;

class SectionTwo extends Component
{

    protected $listeners = ['nextPosition2','previousPosition2'];

    public function nextPosition2()
    {
        $this->emit('increasePosition');
    }
    public function previousPosition2()
    {
        $this->emit('decreasePosition');

    }
    public function render()
    {
        return view('livewire.evaluation.sections.section-two');
    }
}
