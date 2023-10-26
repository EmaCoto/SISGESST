<?php

namespace App\Http\Livewire\Companies;

use App\Models\Company;
use Livewire\Component;


class ShowCompany extends Component
{
    public $company, $idCompany;
    protected $listeners = ['render'];

    public function mount($id)
    {
        $this->idCompany = $id;
        $this->company = Company::find($id);
    }

    public function deactivateCompany()
    {
        Company::where('id', $this->idCompany)->update([
            'is_active' => 0,
        ]);
        return redirect()->route('dashboard');
    }


    public function render()
    {
        return view('livewire.companies.show-company');
    }
}
