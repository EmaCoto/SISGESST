<?php

namespace App\Http\Livewire\Companies;

use App\Models\Company;
use Livewire\Component;
use Livewire\Livewire;

class ShowCompany extends Component
{
    public $company;
    protected $listeners = ['render'];

    public function mount($id)
    {
        $this->company = Company::find($id);
    }

    public function render()
    {
        return view('livewire.companies.show-company');
    }


}
