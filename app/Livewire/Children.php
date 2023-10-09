<?php

namespace App\Livewire;

use Livewire\Attributes\Modelable;
use Livewire\Component;

class Children extends Component
{
    #[Modelable]
    public $name;

    public function render()
    {
        return view('livewire.children');
    }
}
