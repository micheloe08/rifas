<x-app-layout>
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Inicio') }}
            </h2>
        </div>
    </x-slot>
    <div class="grid gap-12">
        @livewire('principal')
    </div>
</x-app-layout>
