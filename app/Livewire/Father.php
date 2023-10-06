<?php

namespace App\Livewire;

use Livewire\Component;

class Father extends Component
{
    public $name = "Victor Arana";

    public function render()
    {
        return view('livewire.father');
    }
}
