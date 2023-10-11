<?php

namespace App\Http\Livewire\Admin\Managers;

use App\Models\User;
use Livewire\Component;

class ManagersIndex extends Component
{
    public $search;
    protected $listeners = ['render' => 'render'];

    public function render()
    {
         // Realiza una consulta para obtener solo los usuarios con el rol de administrador
         $managers = User::whereHas('roles', function ($query) {
            $query->where('name', 'Gestor');
            })
            ->where(function ($query) {
            $query->where('name', 'like', '%'.$this->search.'%')
                ->orWhere('id', 'like', '%'.$this->search.'%')
                ->orWhere('email', 'like', '%'.$this->search.'%');
            })
            ->paginate(10);
        return view('livewire.admin.managers.managers-index', compact('managers'));
    }
}
