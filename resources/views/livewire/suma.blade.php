<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    <input type="text" wire:model="numero1">
    <br>
    <input type="text" wire:model="numero2">

    <button wire:click="sumar">sumar</button>
    <br>
    <br>
    <h2>El resultado de la suma es: <span style="color: aqua;">{{ $respuesta }}</span></h2>



    <input type="text" wire:model="a">
    <br>
    <input type="text" wire:model="b">
    <br>
    <button wire:click="multiplicacion">Multiplicar</button>
    <br>
    <h2>El resultado de la suma es: <span>{{ $res }}</span> </h2>

</div>
