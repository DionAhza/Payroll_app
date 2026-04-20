<?php

namespace App\Livewire\Admin;

use App\Models\Position;
use App\Models\User;
use Livewire\Component;

class Employee extends Component
{
    public function render()
    {
        $users = User::all();
        $positions = Position::all();
        return view('livewire.admin.employee', compact('users','positions'));
    }
}
