<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ListUsers extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.user.list-users',[
            'users' => User::paginate(10)
        ]);
    }
}