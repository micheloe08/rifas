
<div>
<div class="grid gap-12 mb-12 md:grid-cols-1">

    <div>
        <label for="searchterm" class="block mb-2 text-sm font-medium text-gray">Teléfono</label>
        <input type="text" id="searchterm" wire:model.bounced.2000ms="searchterm" class="{{ $errors->has('searchterm') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @error('searchterm')
        <span class="text-red-500 text-xs italic">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="grid gap-12 mb-12 md:grid-cols-1">
    <div>
        <label for="nombre" class="block mb-2 text-sm font-medium">Nombre Completo </label>
        <input type="text" id="nombre" wire:model.live="nombre" class="{{ $errors->has('nombre') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
        @error('nombre')
        <span class="text-red-500 text-xs italic">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="grid gap-6 mb-6 md:grid-cols-2">
    <div>
        <label for="estado" class="block mb-2 text-sm font-medium">Estado</label>
        <input type="text" id="estado" wire:model.live="estado" class="{{ $errors->has('estado') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @error('estado')
        <span class="text-red-500 text-xs italic">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="ciudad" class="block mb-2 text-sm font-medium">Descripción</label>
        <input type="text" id="ciudad" wire:model.live="ciudad" class="{{ $errors->has('ciudad') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @error('ciudad')
        <span class="text-red-500 text-xs italic">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="grid gap-12 mb-12 md:grid-cols-1">
    <button type="button" wire:click="store()" class="px-3 py-2 bg-green-700 text-white hover:bg-green-500 hover:text-white rounded">Apartar Boletos</button>
</div>
<div class="grid gap-12 mb-12 md:grid-cols-1">
    <button type="button" wire:click="store()" class="px-3 py-2 bg-gray-200 hover:bg-gray-50 rounded">Seleccionar al azar</button>
</div>
</div>
