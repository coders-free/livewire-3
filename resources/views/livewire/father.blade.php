<div>

    <x-button wire:click="redirigir">
        Ir a prueba
    </x-button>

    <h1 class="text-2xl font-semibold">
        Soy el componente padre
    </h1>

    <x-input wire:model.live="name" />

    <hr class="my-6">

    <div>
        @livewire('contador', [], key('contador-1'))

        @livewire('contador' , [], key('contador-2'))

        @livewire('contador' , [], key('contador-3'))

        @livewire('contador', [], key('contador-4'))

        @livewire('contador', [], key('contador-5'))

        <livewire:contador key="contador-6" />
    </div>

</div>
