<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Sorteos') }}
            </h2>
        </div>
    </x-slot>
    <div class="grid gap-8">
        @livewire('sorteos')
    </div>
</x-app-layout>
