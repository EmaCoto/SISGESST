<?php

namespace App\Http\Livewire\Processes;

use App\Models\Activity;
use App\Models\Process;
use Livewire\Component;
use Livewire\WithPagination;

class ShowProcess extends Component
{
    use WithPagination;
    public $companyId;
    public $processId;

    public function mount($companyId)
    {
        $this->companyId = $companyId;
    }


    public function render()
    {
        $processes = Process::where('company_id', $this->companyId)
            ->paginate(5);
        return view('livewire.processes.show-process', ['processes' => $processes]);
    }

    public function ShowActivityId($id)
    {
        $this->processId = $id;
        $this->emit('ShowActivityId', $this->processId);
    }

}
