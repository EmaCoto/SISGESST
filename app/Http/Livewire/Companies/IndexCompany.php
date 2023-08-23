<?php

namespace App\Http\Livewire\Companies;

use App\Models\Company;
use Livewire\Component;

class IndexCompany extends Component
{
    public $companies;
    protected $listeners = ['render' => 'render'];

    public function mount()
    {
        $this->companies = Company::orderBy('id', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.companies.index-company');
    }
}
