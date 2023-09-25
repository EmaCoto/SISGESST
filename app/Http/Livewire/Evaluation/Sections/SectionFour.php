<?php

namespace App\Http\Livewire\Evaluation\Sections;

use Livewire\Component;

class SectionFour extends Component
{
    protected $listeners = ['nextPosition4','previousPosition4'];

    public function nextPosition4()
    {
        $this->emit('increasePosition');
    }
    public function previousPosition4()
    {
        $this->emit('decreasePosition');

    }
    public function render()
    {
        return view('livewire.evaluation.sections.section-four');
    }
}
