<?php

namespace App\Http\Livewire\Processes;

use App\Models\Process;
use Livewire\Component;
use Livewire\WithPagination;

class ShowProcess extends Component
{
    use WithPagination;

    public $companyId, $processId;
    public $open = false;
    public $openProcesses = [];

    public function mount($companyId)
    {
        $this->companyId = $companyId;
    }

    public function toggleProcess($processId)
    {
        if (in_array($processId, $this->openProcesses)) {
            // El proceso ya está abierto, ciérralo
            $this->openProcesses = array_diff($this->openProcesses, [$processId]);
        } else {
            // Cierra cualquier proceso abierto y abre el nuevo proceso
            $this->openProcesses = [$processId];
        }
    }

    public function render()
    {
        $processes = Process::where('company_id', $this->companyId)->get();

        return view('livewire.processes.show-process', [
            'processes' => $processes,
        ]);
    }
}
