<?php

namespace App\Livewire\Admin;

use App\Models\Position as ModelsPosition;
use Livewire\Component;

class Position extends Component
{

    public $name;

    public function render()
    {
        $positions = ModelsPosition::all();
        return view('livewire.admin.position', compact('positions'));
    }

    public function store(){
       $validated = $this->validate(
            [
            'name'=>'required'
            ]
        );

        ModelsPosition::create($validated);
        session()->flash('message','berhasil menambah data');
    }

}
