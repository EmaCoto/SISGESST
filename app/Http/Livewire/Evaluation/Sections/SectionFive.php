<?php

namespace App\Http\Livewire\Evaluation\Sections;

use Livewire\Component;

class SectionFive extends Component
{
    protected $listeners = ['nextPosition5','previousPosition5'];

    public function nextPosition5()
    {
        $this->emit('increasePosition');
    }
    public function previousPosition5()
    {
        $this->emit('decreasePosition');

    }

    public function render()
    {
        return view('livewire.evaluation.sections.section-five');
    }
}
