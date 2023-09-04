<?php

namespace App\Http\Livewire\Evaluation;

use Livewire\Component;

class Text extends Component
{
    public $danger;
    public $effects;
    public $source;
    public $means;
    public $individual;

    public function sendTextAreas()
    {
        // Aquí puedes enviar el contenido de las áreas de texto al componente padre
        $textData = [
            'danger' => $this->danger,
            'effects' => $this->effects,
            'source' => $this->source,
            'means' => $this->means,
            'individual' => $this->individual,
        ];

        $this->emit('textAreas', $textData);
    }

    public function render()
    {
        return view('livewire.evaluation.text');
    }
}
