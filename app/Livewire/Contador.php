<?php

namespace App\Livewire;

use Livewire\Component;

class Contador extends Component
{
    public $count = 0;

    public function decrement()
    {
        $this->count--;
    }

    public function increment($cant = 1)
    {
        $this->count += $cant;
    }

    public function render()
    {
        return view('livewire.contador');
    }
}
