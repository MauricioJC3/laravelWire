<?php

namespace App\Livewire;

use Livewire\Component;

class Suma extends Component
{
    public $numero1, $numero2, $respuesta = 0.00;

    public function sumar ()
    {
        $this->respuesta = $this->numero1 + $this->numero2;
    }
    public function render()
    {
        return view('livewire.suma');
    }
}
