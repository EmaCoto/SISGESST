<?php

namespace App\Http\Livewire\Admin\Parameter;

use Livewire\Component;

class EditParameter extends Component
{
    public $openParameter = false;

    public function render()
    {
        return view('livewire.admin.parameter.edit-parameter');
    }
}
