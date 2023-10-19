<?php

namespace App\Http\Livewire\Admin\Dangers;

use App\Models\DangerDescription;
use Livewire\Component;

class EditDangers extends Component
{
    public $openDanger = false;
    public $danger, $descriptions, $dangerDescription = [];

    protected $rules = [
        'dangerDescription.*' => 'required',
    ];

    public function mount($danger)
    {
        $this->danger = $danger;

        $this->descriptions = DangerDescription::where('danger', $this->danger)->get();
        foreach($this->descriptions as $description){
            $this->dangerDescription[] = $description->danger_description;
        }
    }

    public function saveDanger()
    {
        $this->validate();

        foreach ($this->descriptions as $index => $query) {
            $query->danger_description = $this->dangerDescription[$index];
            $query->save();
        }
        $this->reset('openDanger');
        $this->emit('renderDanger');
    }

    public function render()
    {
        return view('livewire.admin.dangers.edit-dangers');
    }
}
