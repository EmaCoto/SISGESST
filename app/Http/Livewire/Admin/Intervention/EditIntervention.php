<?php

namespace App\Http\Livewire\Admin\Intervention;

use App\Models\InterventionMeasure;
use Livewire\Component;

class EditIntervention extends Component
{
    public $openIntervention = false;
    public $intervention, $interventions, $interventionDescription = [];

    protected $rules = [
        'interventionDescription.*' => 'required',
    ];

    public function mount($intervention)
    {
        $this->intervention = $intervention;

        $this->interventions = InterventionMeasure::where('name', $this->intervention)->get();
        foreach($this->interventions as $intervention){
            $this->interventionDescription[] = $intervention->description;
        }
    }

    public function saveIntervention()
    {
        $this->validate();

        foreach ($this->interventions as $index => $query) {
            $query->description = $this->interventionDescription[$index];
            $query->save();
        }
        $this->reset('openIntervention');
        $this->emit('renderIntervention');
    }
    public function render()
    {
        return view('livewire.admin.intervention.edit-intervention');
    }
}
