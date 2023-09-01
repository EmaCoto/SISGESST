<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormWizard extends Component
{
    public $step = 1;
    public $data = [];

    protected $listeners = [
        'sendData'
    ];

    public function sendData($data1, $data2){
        dd($data1, $data2);
    }
    public function nextStep()
    {
        $this->step++;
    }

    public function prevStep()
    {
        $this->step--;
    }

    public function submitForm()
    {
        // Aquí puedes guardar los datos del formulario
        // $this->data contiene los datos del formulario completo
        dd([
            'data' => $this->data,
            'step' => $this->step
        ]);
    }

    public function render()
    {
        return view('livewire.form-wizard');
    }
}
