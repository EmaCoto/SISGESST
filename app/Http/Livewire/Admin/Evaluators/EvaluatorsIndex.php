<?php

namespace App\Http\Livewire\Admin\Evaluators;

use App\Models\User;
use Livewire\Component;

class EvaluatorsIndex extends Component
{
    public $search;
    protected $listeners = ['render' => 'render'];

    public function render()
    {
         // Realiza una consulta para obtener solo los usuarios con el rol de administrador
         $evaluators = User::whereHas('roles', function ($query) {
            $query->where('name', 'Evaluador');
            })
            ->where(function ($query) {
            $query->where('name', 'like', '%'.$this->search.'%')
                ->orWhere('id', 'like', '%'.$this->search.'%')
                ->orWhere('email', 'like', '%'.$this->search.'%');
            })
            ->paginate(18);
        return view('livewire.admin.evaluators.evaluators-index', compact('evaluators'));
    }
}
