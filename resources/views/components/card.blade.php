
@props([
    'title' => 'Default',
    'informacion' => 'Default',
    'ruta' => 'nada',
    'slot' => 'nada'
])
<div class="max-w-sm max-w-md max-w-xs p-1 bg-yellow border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">{{$title}}</h5>
    </a>
    <p class="mb-3 font-normal text-gray-700 dark:text-white">
        {{$slot}}
    </p>
    <div class="pt-5">

    </div>
    <div class="grid gap-8 mb-8">
        <button type="button"><a href="{{$ruta}}" class="px-3 py-2 bg-blue-200 text-blue-500 hover:bg-blue-500 hover:text-white rounded">
        Detalles
    </a></button>
    </div>
</div>
