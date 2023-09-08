<?php

namespace App\Http\Livewire\Companies;

use App\Models\Company;
use Livewire\Component;
use Livewire\Livewire;

class ShowCompany extends Component
{
    public $company;
    public $openProcesses = [];
    protected $listeners = ['render'];

    public function mount($id)
    {
        $this->company = Company::find($id);
    }

    // public function toggleProcess($processId)
    // {
    //     if (in_array($processId, $this->openProcesses)) {
    //         // El proceso ya está abierto, ciérralo
    //         $this->openProcesses = array_diff($this->openProcesses, [$processId]);
    //     } else {
    //         // Cierra cualquier proceso abierto y abre el nuevo proceso
    //         $this->openProcesses = [$processId];

    //         // Emite un evento para mostrar el componente ShowActivity con el ID del proceso.
    //         $this->emit('showActivity', $this->openProcesses);
    //     }
    // }

    public function render()
    {
        return view('livewire.companies.show-company');
    }


}
