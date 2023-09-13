<?php

namespace App\Http\Livewire\Companies;

use App\Models\Company;
use Livewire\Component;
use App\Models\City;


class CreateCompany extends Component
{
    public $open = false;
    public $cities;
    public  $nit, $name ,$email ,$direct_workers ,$indirect_workers ,$made_by ,$position ,$city ,$economic_sector;

    public function save()
    {
        Company::create([
            'nit' => $this->nit,
            'name' => $this->name,
            'email' => $this->email,
            'number_direct_workers' => $this->direct_workers,
            'number_indirect_workers' => $this->indirect_workers,
            'made_by' => $this->made_by,
            'position' => $this->position,
            'city_id' => $this->city,
            'economic_sector' => $this->economic_sector
        ]);

        $this->reset(['open', 'nit', 'name', 'email', 'direct_workers', 'indirect_workers', 'made_by', 'position', 'city', 'economic_sector']);
        $this->emit('render');
    }


    public function mount(){
        $this->cities = City::orderBy('name', 'asc')->get();
    }

    public function render()
    {
        return view('livewire.companies.create-company');
    }
}
