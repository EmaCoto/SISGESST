<?php

namespace App\Http\Livewire\Processes;

use App\Models\Process;
use Livewire\Component;
use Livewire\WithPagination;

class ShowProcess extends Component
{
    use WithPagination;

    public $companyId, $processId, $processName, $processDelete;
    public $open = false, $openDelete = false;

    protected $listeners = ['render'];

    public function mount($companyId)
    {
        $this->companyId = $companyId;
        $this->emitTo('activities.create-activity', 'companyId', $companyId);
    }

    public function render()
    {
        $processes = Process::where('company_id', $this->companyId)->paginate(5);
        return view('livewire.processes.show-process', [
            'processes' => $processes,
        ]);
    }

    public function processId($id, $name, $companyId)
    {
        $this->emit('processFact', [
            'processId' => $id,
            'processName' => $name,
            'companyId' => $companyId
        ]);
    }

    public function confirmDelete($id)
    {
        $this->processDelete = Process::find($id);
        $this->openDelete = true; // Abre el modal de confirmación
    }

    public function deleteConfirmed()
    {
        if ($this->processDelete) {
            $this->processDelete->delete();
            $this->emitTo('companies.show-company', 'render');
        }
        $this->openDelete = false; // Cierra el modal de confirmación
    }
}
