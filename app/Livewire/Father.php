<?php

namespace App\Livewire;

use Livewire\Component;

class Father extends Component
{
    public $name = "Victor Arana";

    public function redirigir()
    {
        return $this->redirectRoute('prueba', navigate: true);
    }

    public function render()
    {
        return view('livewire.father');
    }
}
