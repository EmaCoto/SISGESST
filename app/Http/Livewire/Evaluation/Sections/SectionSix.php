<?php

namespace App\Http\Livewire\Evaluation\Sections;

use Livewire\Component;

class SectionSix extends Component
{
    protected $listeners = ['nextPosition6','previousPosition6'];

    public function nextPosition6()
    {
        $this->emit('increasePosition');
    }
    public function previousPosition6()
    {
        $this->emit('decreasePosition');

    }
    public function render()
    {
        return view('livewire.evaluation.sections.section-six');
    }
}
