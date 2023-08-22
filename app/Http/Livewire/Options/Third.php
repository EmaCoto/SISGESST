<?php

namespace App\Http\Livewire\Options;

use Livewire\Component;

class Third extends Component
{
    protected $listeners = ['selectedFirstRangeUpdated', 'selectedSecondRangeUpdated'];

    public $FirstRange = 0;
    public $SecondRange = 0;
    public $mul = 0;


    public function selectedFirstRangeUpdated($range)
    {
        $this->FirstRange = $range;
    }

    public function selectedSecondRangeUpdated($range)
    {
        $this->SecondRange = $range;
    }

    public function multi(){

        // $this->mul = $FirstRange * $SecondRange;
    }

    public function render()
    {
        return view('livewire.options.third');
    }
}
