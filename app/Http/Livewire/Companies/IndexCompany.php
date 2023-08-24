<?php

namespace App\Http\Livewire\Companies;

use App\Models\Company;
use Livewire\Component;

class IndexCompany extends Component
{
    public $companies;
    public $search;
    protected $listeners = ['render' => 'render'];

    public function mount()
    {
        $this->companies = Company::orderBy('id', 'desc')->get();
    }

    public function render()
    {
        $companiesSearch = Company::where('name', 'like', '%'. $this->search .'%')->get();

        return view('livewire.companies.index-company', compact('companiesSearch'));
    }
}
