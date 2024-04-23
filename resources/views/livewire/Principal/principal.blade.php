<div class="dark:bg-gray-800 max-w-7xl2">
    <div class="p-1 mb-4 text-xl text-white text-center rounded-lg bg-gray-800 dark:bg-gray-800 dark:text-white" role="alert">
        <span class="font-medium"> {{ $data->descripcion }}</span><br/>
        <span class="font-medium"> Precios desde: ${{ $data->costo }}</span>
      </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <img src = "{{ asset('storage/'.$data->imagen1) }}"/>
    </div>
    <div class="pt-5">

    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        @include('faqs')
    </div>
</div>

