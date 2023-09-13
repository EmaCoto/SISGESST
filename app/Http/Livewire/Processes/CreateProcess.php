<?php

namespace App\Http\Livewire\Processes;

use App\Models\Process;
use Livewire\Component;

class CreateProcess extends Component
{
    public $open = false;
    public $companyId, $companyName;
    public $name, $description;

    public function mount($companyId, $companyName)
    {
        $this->companyId = $companyId;
        $this->companyName = $companyName;
    }


    public function save()
    {
        Process::create([
            'name' => $this->name,
            'description' => $this->description,
            'company_id' => $this->companyId,
        ]);

        $this->reset(['open', 'name', 'description']);
        $this->emit('render');
        $this->emit('selectedProcess');
    }

    public function render()
    {
        return view('livewire.processes.create-process');
    }
}
