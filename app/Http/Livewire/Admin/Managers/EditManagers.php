<?php

namespace App\Http\Livewire\Admin\Managers;

use Livewire\Component;

class EditManagers extends Component
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

    public function updateManager()
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
        return view('livewire.admin.managers.edit-managers');
    }
}
