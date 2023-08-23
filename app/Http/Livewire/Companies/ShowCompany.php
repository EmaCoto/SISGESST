<?php

namespace App\Http\Livewire\Companies;

use App\Models\Company;
use Livewire\Component;

class ShowCompany extends Component
{
    public function render()
    {
        return view('livewire.companies.show-company');
    }
}
