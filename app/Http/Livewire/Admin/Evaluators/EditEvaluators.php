<?php

namespace App\Http\Livewire\Admin\Evaluators;

use Livewire\Component;

class EditEvaluators extends Component
{
    public $open = false;
    public $user;
    public $name;
    public $email;

    public function mount($user)
    {
        if ($user) {
            $this->user = $user;
            $this->name = $user->name;
            $this->email = $user->email;
        }
    }

    public function updateEvaluator()
    {
        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $this->emit('userUpdated');
        $this->reset('open');
    }
    public function render()
    {
        return view('livewire.admin.evaluators.edit-evaluators');
    }
}
