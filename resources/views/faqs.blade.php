<div class="dark:bg-gray-800 max-w-7xl2">
    <div class="p-1 mb-4 text-xl text-white text-center rounded-lg bg-white dark:bg-gray-800 dark:text-black" role="alert">
       <h1>Pasos para Apartar tus Boletos</h1><br>
       <div class="grid gap-4 mb-2 md:grid-cols-3 sm-gap-4">
        <div>
            <x-card title="Paso 1:" informacion="50" ruta="{{ route('clientes') }}">
                <ul class="font-medium text-black">
                    <li>
                        1. Elige un número de nuestra lista para apartarlo con tu nombre y teléfono.
                    </li>
                </ul>
            </x-card>
        </div>
        <div>
            <x-card title="Paso 2:" informacion="50" ruta="{{ route('clientes') }}">
                <ul class="font-medium text-black">
                    <li>
                        2. Elige tu método de pago: depósito en banco, OXXO o transferencia bancaria.
                    </li>
                </ul>
            </x-card>
        </div>
        <div>
            <x-card title="Paso 3:" informacion="50" ruta="{{ route('clientes') }}">
                <ul class="font-medium text-black">
                    <li>
                        3. Envíanos tu comprobante y recibe de inmediato tu boleto por whatsapp.
                    </li>

                </ul>
            </x-card>
        </div>
        <div class="pt-2">

        </div>
    </div>
    <div class="grid gap-4 mb-4 md:grid-cols-1">
        <a href="/venta" wire:navigate> <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Compra tus boletos aqui ☝🏻</button> </a>
     </div>
     <div class="pt-2">

     </div>
     <div class="grid gap-4 mb-4 md:grid-cols-1">
        <a> <button wire:click="$set('consulta', true)" type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Consulta tus boletos aqui! 🎫🤞🏻</button> </a>
     </div>
    </div>
    <div class="pt-2">

    </div>

    <div class="grid gap-4 mb-2 md:grid-cols-1">
        <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="relative overflow-x-auto shadow-md sm:rounded-lg" src="https://sorteossonorense.com/assets/loteria.png" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Dinamica para elegir los Ganadores</h3>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">El número Ganador de cada sorteo se elige en base a las últimas 4 o 5 dígitos el premio mayor de LOTERÍA NACIONAL, según el sorteo publicado. En el debido caso de que en el mismo día se jueguen dos premios. Los ganadores eligen en base a los dos Premios Mayores. (En cada Sorteo, se especifica su dinamica) NOTA: En caso que el número ganador de la L OTERIA NACIONAL caiga en boleto no vendido se pospone la rifa en la siguiente fecha de LN. Siendo así que tendràs más probabilidades de Ganar.</p>
            </div>
        </a>
    </div>
    <x-dialog-modal wire:model="consulta">
        <x-slot name="title">
            <span class="font-bold text-center"> <h1>Consulta aqui 👇🏻</h1></span>
        </x-slot>
        <x-slot name="content">
            @if (session()->has('message'))
            @if ($alerta)
                <x-success-alert />
            @else
                <x-danger-alert />
            @endif
        @endif
            <div>
                <label for="depurar" class="block mb-2 text-sm font-medium text-gray">Teléfono</label>
                <input type="text" id="searchterm" wire:model.defer="depurar" class="{{ $errors->has('depurar') ? ' border-red-500' : 'border-lime-500' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('depurar')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>
        </x-slot>
        <x-slot name="footer">
            <div>
                <button wire:click="consultarBoletos()" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Consultar</button>
            </div>
            <div class="pt-5">

            </div>
            <div>
                <button wire:click="$set('consulta', false)" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Cancelar</button>
            </div>
            <div class="pt-5">

            </div>
        </x-slot>
    </x-dialog-modal>
</div>
