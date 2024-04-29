
<div>
    <div class="grid gap-12 mb-12 md:grid-cols-2">

        <div>
            <label for="descripcion" class="block mb-2 text-sm font-medium text-gray">Descripción</label>
            <input type="text" id="descripcion" wire:model="descripcion" class="{{ $errors->has('descripcion') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('descripcion')
            <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="costo" class="block mb-2 text-sm font-medium text-gray">Costo</label>
            <input type="text" id="costo" wire:model="costo" class="{{ $errors->has('costo') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('costo')
            <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="grid gap-12 mb-12 md:grid-cols-2">
        <div>
            <label for="premio_principal" class="block mb-2 text-sm font-medium">Premio Principal </label>
            <input type="text" id="premio_principal" wire:model="premio_principal" class="{{ $errors->has('premio_principal') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
            @error('premio_principal')
            <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="fecha_sorteo_principal" class="block mb-2 text-sm font-medium">Fecha sorteo principal</label>
            <input type="text" id="fecha_sorteo_principal" wire:model="fecha_sorteo_principal" class="{{ $errors->has('fecha_sorteo_principal') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="fecha formato aaaa-mm-dd" >
            @error('fecha_sorteo_principal')
            <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="grid gap-12 mb-12 md:grid-cols-3">
        <div>
            <label for="tiraje" class="block mb-2 text-sm font-medium text-gray">Tiraje</label>
            <input type="text" id="tiraje" wire:model="tiraje" class="{{ $errors->has('tiraje') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('tiraje')
            <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="imagen1" class="block mb-2 text-sm font-medium">Imagen Principal</label>
            <input type="file" id="imagen1" wire:model="imagen1" class="{{ $errors->has('imagen1') ? ' border-red-500' : 'border-gray-200' }} ">
            @error('imagen1')
            <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="imagen2" class="block mb-2 text-sm font-medium">Imagen adicional</label>
            <input type="file" id="imagen2" wire:model="imagen2" class="{{ $errors->has('imagen2') ? ' border-red-500' : 'border-gray-200' }} ">
            @error('imagen2')
            <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="grid gap-12 mb-12 md:grid-cols-1">
        <button type="button" wire:click="store()" class="px-3 py-2 bg-green-700 text-white hover:bg-green-500 hover:text-white rounded">Guardar</button>
    </div>
    </div>
