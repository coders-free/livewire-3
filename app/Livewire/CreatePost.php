<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class CreatePost extends Component
{
    //Array, String, Integer, Float, Boolean, Null
    //Colleciones, modelos, datetime, etc

    public $title;

    public $name, $email;

    public function mount(User $user){
        /* $this->name = $user->name;
        $this->email = $user->email; */
        $this->fill(
            $user->only(['name', 'email'])
        );
    }

    public function save()
    {
        /* dd($this->name); */
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
