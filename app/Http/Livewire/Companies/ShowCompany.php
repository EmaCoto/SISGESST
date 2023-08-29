<?php

namespace App\Http\Livewire\Companies;

use App\Models\Company;
use App\Models\Process;
use Livewire\Component;

class ShowCompany extends Component
{
    public $company;

    public function mount($id)
    {
        $this->company = Company::find($id);
    }

    public function render()
    {
        return view('livewire.companies.show-company');
    }
}
