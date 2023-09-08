<?php

namespace App\Http\Livewire\Companies;

use Livewire\Component;

class EditCompany extends Component
{
    public $open = false;

    public function render()
    {
        return view('livewire.companies.edit-company');
    }
}
