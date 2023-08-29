<?php

namespace App\Http\Livewire\Evaluation;



use Livewire\Component;



class Three extends Component
{
    // public $danger, $effects, $source, $mean, $individual;

    public function render()
    {
        return view('livewire.evaluation.three');
    }

    // public function saveControls()
    // {
    //     $controlsData = [
    //         'danger' => $this->danger,
    //         'effects' => $this->effects,
    //         'source' => $this->source,
    //         'mean' => $this->mean,
    //         'individual' => $this->individual,
    //     ];

    //     Controls::create($controlsData);

    //     // Limpia los campos después de guardar
    //     $this->reset(['danger', 'effects', 'source', 'mean', 'individual']);
    // }


}
