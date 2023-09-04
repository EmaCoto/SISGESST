<?php

namespace App\Http\Livewire\Evaluation;

use App\Models\Evaluation;
use Livewire\Component;

class EvaluationParent extends Component
{
    public $textData;
    public $listeners = ['textAreas'];

    public function textAreas($facts)
    {
        $this->textData = [
            'danger' => $facts['danger'],
            'effects' =>$facts['effects'],
            'source' =>$facts['source'],
            'means' =>$facts['means'],
            'individual' => $facts['individual']
        ];
    }

    public function submitForm()
    {
        $this->validate([
            'textData.danger' => 'required',
            'textData.effects' => 'required',
            'textData.source' => 'required',
            'textData.means' => 'required',
            'textData.individual' => 'required',
        ]);
        // Guarda los datos en la base de datos
        $evaluation = new Evaluation([
            'danger' => $this->textData['danger'],
            'effects' => $this->textData['effects'],
            'source' => $this->textData['source'],
            'means' => $this->textData['means'],
            'individual' => $this->textData['individual'],
        ]);

        $evaluation->save();

        // Limpia los campos después de guardar
        $this->reset(['textData']);
    }

    public function render()
    {
        return view('livewire.evaluation.evaluation-parent');
    }
}


