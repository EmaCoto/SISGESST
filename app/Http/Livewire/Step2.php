<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Step2 extends Component
{
    public $data = [];

    protected $rules = [
        'data.step2field1' => 'required',
        'data.step2field2' => 'required',
    ];

    public function updatedData($value){

        dd($value);
        $this->emitUp('sendData', $this->data['step2field1'], $this->data['step2field2']);
    }

    public function mount($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('livewire.step2');
    }
}
