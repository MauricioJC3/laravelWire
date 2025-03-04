<?php

namespace App\Livewire;

use Livewire\Component;

class Contador extends Component
{

    public $numero = 3;

    public function render()
    {
        return view('livewire.contador');
    }
}
