
   @if($updateMode)
        @include('boletos')
    @endif
    <div class="dark:bg-gray-800 max-w-7xl2">
        <div class="p-1 mb-4 text-xl text-white text-center rounded-lg bg-gray-800 dark:bg-gray-800 dark:text-white" role="alert">
            <span class="font-medium"> {{ $datas->descripcion }}</span><br/>
            <span class="font-medium"> Precios desde: ${{ $datas->costo }}</span>
          </div>
<div class="grid gap-12 mb-12 md:grid-cols-1">

    <div>
        <label for="searchterm" class="block mb-2 text-sm font-medium text-gray">Teléfono</label>
        <input type="text" id="searchterm" wire:model.bounced.2000ms="searchterm" class="{{ $errors->has('searchterm') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:change = "search">
        @error('searchterm')
        <span class="text-red-500 text-xs italic">{{ $message }}</span>
        @enderror
    </div>
</div>


<div class="grid gap-12 mb-12 md:grid-cols-1">
    <div>
        <label for="nombre" class="block mb-2 text-sm font-medium">Nombre Completo</label>
        <input type="text" id="nombre" wire:model.defer="nombre" class="{{ $errors->has('nombre') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
        @error('nombre')
        <span class="text-red-500 text-xs italic">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="grid gap-6 mb-6 md:grid-cols-2">
    <div>
        <label for="estado" class="block mb-2 text-sm font-medium">Estado</label>
        <input type="text" id="estado" wire:model.defer="estado" class="{{ $errors->has('estado') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @error('estado')
        <span class="text-red-500 text-xs italic">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="ciudad" class="block mb-2 text-sm font-medium">Descripción</label>
        <input type="text" id="ciudad" wire:model="ciudad" class="{{ $errors->has('ciudad') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @error('ciudad')
        <span class="text-red-500 text-xs italic">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="grid gap-12 mb-12 md:grid-cols-1">
    <button type="button" wire:click="search()" class="px-3 py-2 bg-green-700 text-white hover:bg-green-500 hover:text-white rounded">Apartar Boletos</button>
</div>
@if ($mostrar)
    <div class="list__buttons">
        <span class="font-medium"> Numeros Elegidos</span><br/>
        @foreach ($numerosElegidos as $item)
        <button  class="max-w-12 px-3 py-2 text-xs font-small text-left bg-green-700 text-white hover:bg-green-500 hover:text-white rounded" wire:click = "selecciona()" >{{mb_str_pad($item, 5, '0', STR_PAD_LEFT)}}</button>
        @endforeach
    </div>
    <div class="pt-5">

    </div>
@endif
<div class="grid gap-12 mb-12 md:grid-cols-1">
    <button type="button" wire:click="store()" class="px-3 py-2 bg-gray-500 text-white hover:bg-gray-200 hover:text-gray-500 rounded">Seleccionar al azar</button>
</div>
<div class="list__buttons w-5/5 bg-gray-50 max-h-screen h-96 overflow-y-auto">
    @foreach ($numeros as $item)
        @if (in_array($item, $boletos_disponibles))
            <button  class="max-w-12 px-3 py-2 text-xs font-small text-left bg-white text-black hover:bg-gray-50 cursor-not-allowed" wire:click = "selecciona({{$item}})" >{{mb_str_pad($item, 5, '0', STR_PAD_LEFT)}}</button>
        @else
            <button  class="max-w-12 px-3 py-2 text-xs font-small text-left bg-gray-500 text-white hover:bg-gray-200 hover:text-gray-500" wire:click = "selecciona({{$item}})" >{{mb_str_pad($item, 5, '0', STR_PAD_LEFT)}}</button>
        @endif
    @endforeach
</div>
</div>


