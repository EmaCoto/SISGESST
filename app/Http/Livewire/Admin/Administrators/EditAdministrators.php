<?php

namespace App\Http\Livewire\Admin\Administrators;

use Livewire\Component;

class EditAdministrators extends Component
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

    public function render()
    {
        return view('livewire.admin.administrators.edit-administrators');
    }

    public function updateAdministrator()
    {
        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $this->emit('render');
        $this->reset('open');
        $this->emit('alert');
    }
}
