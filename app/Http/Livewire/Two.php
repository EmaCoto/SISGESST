<?php

namespace App\Http\Livewire;

use App\Models\Process;
use Livewire\Component;


class Two extends Component
{
    public $search;

    public function render()
    {
        return view('livewire.two');
    }
}
