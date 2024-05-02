
   @if($updateMode)
        @include('boletos')
    @endif
    <div class="dark:bg-gray-800 max-w-7xl2">
        <div class="p-1 mb-4 text-xl text-white text-center rounded-lg bg-gray-800 dark:bg-gray-800 dark:text-white" role="alert">
            <span class="font-medium"> {{ $datas->descripcion }}</span><br/>
            <span class="font-medium"> <h1>Aparta tus Boletos</h1></span>
          </div>
<div class="grid gap-12 mb-12 md:grid-cols-1">
    <input type="hidden" wire:model.defer="cliente_id">
    <div>
        <label for="searchterm" class="block mb-2 text-sm font-medium text-gray">Teléfono</label>
        <input type="text" id="searchterm" wire:model="searchterm" class="{{ $errors->has('searchterm') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:keydown = "search">
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
        <input type="text" id="ciudad" wire:model.defer="ciudad" class="{{ $errors->has('ciudad') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @error('ciudad')
        <span class="text-red-500 text-xs italic">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="grid gap-12 mb-12 md:grid-cols-1">
    <button type="button" wire:click.prevent ="apartar()" class="px-3 py-2 bg-green-700 text-white hover:bg-green-500 hover:text-white rounded">Apartar Boletos</button>
</div>
<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
</div>
@if ($mostrar)
    <div class="list__buttons">
        <span class="font-medium"> Numeros Elegidos</span><br/>
        @foreach ($numerosElegidos as $item)
        <button  class="max-w-12 px-3 py-2 text-xs font-small text-left bg-green-700 text-white hover:bg-green-500 hover:text-white rounded" wire:click = "borrar({{$item}})" ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
          </svg> {{mb_str_pad($item, 5, '0', STR_PAD_LEFT)}}</button>
        @endforeach
    </div>
    <div class="pt-5">

    </div>
@endif
<div class="grid gap-12 mb-12 md:grid-cols-1">
    <button type="button" class="px-3 py-2 bg-gray-500 text-white hover:bg-gray-200 hover:text-gray-500 rounded">Seleccionar al azar</button>
</div>
<div id = "lista" class="list__buttons w-5/5 bg-gray-50 max-h-screen h-96 overflow-y-auto">
    @foreach ($numeros as $item)
        <button class="max-w-12 px-3 py-2 text-xs font-small text-left bg-gray-500 text-white hover:bg-gray-200 hover:text-gray-500" wire:click = "selecciona({{$item}})" wire.key ="{{$item}}">{{mb_str_pad($item, 5, '0', STR_PAD_LEFT)}}</button>
    @endforeach
</div>

</div>


