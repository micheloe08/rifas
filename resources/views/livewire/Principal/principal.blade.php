<div class="dark:bg-gray-800 max-w-7xl2">
    <div class="p-1 mb-4 text-xl text-center rounded-lg  text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80" role="alert">
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

