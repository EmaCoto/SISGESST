<?php

namespace App\Http\Livewire\Evaluation\Options;


use Livewire\Component;

class Fourth extends Component
{
    public $consequence = null;
    public $selectedFourthRange = 0;


    public $options = [
        'Mortal o catastrófico' => [
            'description' => 'Muerte (s)',
            'range' => 100,
        ],
        'Muy grave' => [
            'description' => 'Lesiones o enfermedades graves irreparables (incapacidad permanente parcial o invalidez)',
            'range' => 60,
        ],
        'Grave ' => [
            'description' => 'Lesiones o enfermedades con incapacidad laboral temporal (ILT)',
            'range' => 25,
        ],
        'Leve' => [
            'description' => 'Lesiones o enfermedades que no requieren incapacidad',
            'range' => 10,
        ],
    ];

    public function updatedSelectedFourthRange()
    {
        $this->emit('selectedFourthRangeUpdated', $this->selectedFourthRange);
    }

    public function updatedConsequence()
    {
    if ($this->consequence) {
        $this->selectedFourthRange = $this->options[$this->consequence]['range'];
    } else {
        $this->selectedFourthRange = 0;
    }

    $this->updatedSelectedFourthRange(); // Emit the event
}
    public function render()
    {
        return view('livewire.evaluation.options.fourth');
    }
}
