<div>
    
    <x-button wire:click="decrement">
        -
    </x-button>

    <span class="mx-2">
        {{$count}}
    </span>

    <x-button wire:click="increment(5)">
        +
    </x-button>

</div>
