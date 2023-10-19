<?php

namespace App\Http\Livewire\Admin\Parameter;

use Livewire\Component;

class CreateParameter extends Component
{
    public $openCreateParameter = false;

    public function render()
    {
        return view('livewire.admin.parameter.create-parameter');
    }
}
