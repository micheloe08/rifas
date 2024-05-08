@props([
    'title' => 'Default',
    'informacion' => 'Default',
    'ruta' => 'nada',
    'slot' => 'nada',
    'texto_boton' => 'Borrar'
])
<div class="max-w-sm p-1 ml-10 mr-10 text-center items-center rounded-lg dark:bg-white dark:border-gray-700 border-slate-950">
    <a href="#">
        <h5 class="mb-2 text-2xl font-bold text-center tracking-tight text-black dark:text-black">{{$title}}</h5>
    </a>
    <p class="mb-3 items-center font-normal text-gray-700 dark:text-white">
        {{$slot}}
    </p>
    <div class="pt-5">

    </div>
    <div class="grid gap-8 mb-8">
    </div>
</div>
