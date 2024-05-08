
@props([
    'informacion' => 'Default',
    'ruta' => 'nada',
    'slot' => 'nada',
    'imagen' => '',
    'texto' => 'text-center'
])
<div class="w-full xl:w-1/2 {{ $texto }} rounded-lg border-green-400 solid">

    <div class="relative overflow-x-auto sm:rounded-lg">
        <img src = "{{ $imagen }}" class="w-full xl:w-1/2 mb-3"/>
    </div>
        {{$slot}}
    <div class="pt-5">

    </div>
    <div class="grid gap-8 mb-8">

    </div>
</div>
