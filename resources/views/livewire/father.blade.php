<div>
    <h1 class="text-2xl font-semibold">
        Hola mundo desde el componente padre
    </h1>

    <x-input type="text" wire:model.live="name" />

    <p>
        {{ $name }}
    </p>

    <hr class="my-4">

    @livewire('children', [
        'name' => $name
    ])

</div>
