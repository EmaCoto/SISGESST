<?php

namespace App\Http\Livewire;

use App\Models\Process;
use Livewire\Component;


class One extends Component
{
    public $search;
    public $process;
    public $selectedProcess = null;

    // public function mount()
    // {
    //     // Inicializar la variable $process con los procesos existentes
    //     $this->process = Process::all();
    // }
    protected $listeners =['render'];

    // Método para manejar el evento de proceso creado
    public function processCreated($processId)
    {
        $this->process = Process::all();
    }


    public function render()
    {
        $this->process = Process::where('name', 'like', '%' . $this->search . '%')->get();
        return view('livewire.one', [
            'process' => $this->process,
        ]);
    }
    // public function nextStep(){

    //     return view('livewire.two');
    // }
}
