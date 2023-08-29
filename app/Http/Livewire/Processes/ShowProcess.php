<?php

namespace App\Http\Livewire\Processes;

use App\Models\Process;
use Livewire\Component;

class ShowProcess extends Component
{
    public $companyId;
    public $processes;

    public function mount($companyId)
    {
        $this->companyId = $companyId;

        $this->validateCompany();
    }

    public function render()
    {
        return view('livewire.processes.show-process');
    }

    public function validateCompany()
    {
        $this->processes = Process::where('company_id', $this->companyId)->get();
    }
}
