<?php

namespace App\Http\Livewire\Evaluation\Sections;

use Livewire\Component;

class SectionThree extends Component
{
    protected $listeners = ['nextPosition3','previousPosition3'];

    public function nextPosition3()
    {
        $this->emit('increasePosition');
    }
    public function previousPosition3()
    {
        $this->emit('decreasePosition');

    }
    public function render()
    {
        return view('livewire.evaluation.sections.section-three');
    }
}
