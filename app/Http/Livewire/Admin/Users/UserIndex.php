<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;


class UserIndex extends Component
{

    public $search;
    protected $listeners = ['render' => 'render'];


    public function render()
    {
        $users = User::where('name', 'like', '%'. $this->search .'%')
                        ->orWhere('email', 'like', '%'. $this->search .'%')
                        ->paginate(12);


        return view('livewire.admin.users.user-index', compact('users'));
    }
}
