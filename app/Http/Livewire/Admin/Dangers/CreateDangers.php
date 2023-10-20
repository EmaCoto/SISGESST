<?php

namespace App\Http\Livewire\Admin\Dangers;

use App\Models\DangerDescription;
use App\Models\InterventionMeasure;
use Livewire\Component;

class CreateDangers extends Component
{
    public $danger, $dangerDescription;
    public $openCreateDangers = false;

    public function mount($danger)
    {
        $this->danger = $danger;
    }

    public function createDanger()
    {
        // $this->validate();

        DangerDescription::create([
            'danger' => $this->danger,
            'danger_description' => $this->dangerDescription,
        ]);


        $this->reset('dangerDescription');
        $this->openCreateDangers = false;
        $this->emit('mountDanger');
        // $this->emit('deleteConfirmeParameter');
    }

    public function render()
    {
        return view('livewire.admin.dangers.create-dangers');
    }
}
