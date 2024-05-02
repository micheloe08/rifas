@props([
    'title' => 'Default',
    'informacion' => 'Default',
    'ruta' => 'nada',
    'slot' => 'nada',
    'texto_boton' => 'Borrar'
])
<div class="max-w-sm p-1 text-center rounded-lg shadow dark:bg-white dark:border-gray-700">
    <a href="#">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-black dark:text-black">{{$title}}</h5>
    </a>
    <p class="mb-3 font-normal text-gray-700 dark:text-white">
        {{$slot}}
    </p>
    <div class="pt-5">

    </div>
    <div class="grid gap-8 mb-8">
    </div>
</div>
