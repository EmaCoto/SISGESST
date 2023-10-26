<?php

namespace App\Http\Livewire\Admin\Deactivated;

use App\Models\Company;
use Livewire\Component;

class DeactivatedIndex extends Component
{
    public $companies;
    public function mount()
    {
        $this->companies = Company::where('is_active', 0)->get();
    }
    public function activateCompany($id)
    {
        Company::where('id', $id)->update([
            'is_active' => 1,
        ]);
        return redirect()->route('show-company', ['id' => $id]);
    }
    public function render()
    {
        return view('livewire.admin.deactivated.deactivated-index');
    }
}
