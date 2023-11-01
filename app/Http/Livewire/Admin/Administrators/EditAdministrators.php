<?php

namespace App\Http\Livewire\Admin\Administrators;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class EditAdministrators extends Component
{
    public $open = false;
    public $user, $name, $email, $permissions;
    public $selectedRole;
    public $selectedPermissions = [];
    public $roles;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
    ];

    public function mount($user)
    {
        if ($user) {
            $this->user = $user;
            $this->name = $user->name;
            $this->email = $user->email;

            $this->roles = Role::all();

            $this->permissions = Permission::all();

            $this->selectedRole = $user->getRoleNames()->first();
            $role = Role::findByName($this->selectedRole);
            $this->selectedPermissions = $role->permissions->pluck('id')->toArray();
        }
    }

    public function updateManager()
    {
        $this->validate();

        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);


        $this->user->syncRoles([$this->selectedRole]);
        $this->user->syncPermissions($this->selectedPermissions);

        $this->emit('render');
        $this->reset('open');
        $this->emit('alertEdit');
    }


        public function render()
    {
        return view('livewire.admin.administrators.edit-administrators');
    }
}
