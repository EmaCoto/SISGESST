<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Step3 extends Component
{

    public $data;

    protected $rules = [
        'data.step3_field1' => 'required',
        'data.step3_field2' => 'required',
    ];

    public function mount($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('livewire.step3');
    }
}
