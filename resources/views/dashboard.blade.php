<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            
            {{-- @livewire('formulario')

            <div class="mt-8">
                @livewire('comments')
            </div> --}}

            @livewire('father')

        </div>
    </div>
</x-app-layout>
