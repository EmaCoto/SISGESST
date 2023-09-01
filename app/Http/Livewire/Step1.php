<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Step1 extends Component
{
    public $data;

    protected $rules = [
        'data.step1_field1' => 'required',
        'data.step1_field2' => 'required',
    ];

    public function mount($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('livewire.step1');
    }
}
