
@props([
    'title' => 'Default',
    'informacion' => 'Default',
    'ruta' => 'nada',
    'slot' => 'nada'
])
<div class="max-w-sm p-1 rounded-lg  text-2xl">
    <a href="#">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-black dark:text-black">{{$title}}</h5>
    </a>
        {{$slot}}
    <div class="pt-5">

    </div>
    <div class="grid gap-8 mb-8">

    </div>
</div>
