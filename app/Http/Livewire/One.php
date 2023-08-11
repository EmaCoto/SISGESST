<?php

namespace App\Http\Livewire;

use App\Models\Process;
use Livewire\Component;


class One extends Component
{
    public $search;
    public $process;
    public $selectedProcess = null;

    public function render()
    {
        $this->process = Process::where('name', 'like', '%' . $this->search . '%')->get();
        return view('livewire.one');
    }
    // public function nextStep(){

    //     return view('livewire.two');
    // }
}
