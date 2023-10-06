<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class Children extends Component
{
    #[Reactive]
    public $name;

    public function render()
    {
        return view('livewire.children');
    }
}
