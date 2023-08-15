<?php

namespace App\Http\Livewire\Process;

use App\Models\Process;
use Illuminate\Auth\Events\Validated;
use Livewire\Component;

class Create extends Component
{
    public $open = false;
    public $name, $description;

    protected $rules = [
        'name' => 'required|max:50',
        'description' => 'required|max:255'
    ];

    public function updated($propertyName) {
        $this->ValidateOnly($propertyName);
    }

    public function save(){

        $this->validate();

        $process = Process::create([
            'name' => $this->name,
            'description' => $this->description
        ]);

        // Emitir el evento para indicar que se ha creado un nuevo proceso
        $this->emit('processCreated', $process->id);
        $this->emitTo('one','render');
        $this->reset(['name', 'description', 'open']);
        $this->emit('alert', 'Se creó un nuevo proceso');
    }
    public function render()
    {
        return view('livewire.process.create');
    }
}
