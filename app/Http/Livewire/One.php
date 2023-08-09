<?php

namespace App\Http\Livewire;

use Livewire\Component;

class One extends Component
{
    public $process;
    public $selectedProcess = null;

    public function render()
    {
        return view('livewire.one');
    }
    // public function nextStep(){

    //     return view('livewire.two');
    // }
}
