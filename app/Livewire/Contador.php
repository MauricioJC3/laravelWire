<?php

namespace App\Livewire;

use Livewire\Component;

class Contador extends Component
{

    public $numero = 0;

    public function aumentar()
    {
        $this->numero++;
    }

    public function decrementar()
    {
        $this->numero--;
    }

    public function render()
    {
        return view('livewire.contador');
    }
}
