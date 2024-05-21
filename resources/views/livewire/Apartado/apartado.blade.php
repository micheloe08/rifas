<div>
    <div class="grid gap-6 mb-6 md:grid-cols-2 sm:grid-cols-1">
        <div>
            <button wire:click="$set('muestraTelefono', true)" class="px-3 py-2 bg-green-200 text-green-500 hover:bg-green-700 hover:text-white-100 rounded">Buscar Telefono</button>
        </div>
        <div>
            <button wire:click="inicializar()" class="px-3 py-2 bg-blue-200 text-blue-500 hover:bg-blue-700 hover:text-white-100 rounded">Buscar Boleto</button>
        </div>
        <div class="pt-5">

        </div>
    </div>

        @if (session()->has('message'))
            @if ($alerta)
                <x-success-alert />
            @else
                <x-danger-alert />
            @endif
        @endif
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col">Teléfono</th>
                <th scope="col">Nombre</th>
                <th scope="col">Costo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($apartado as $item)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $item->telefono }} </th>
                    <td scope="col">{{ $item->nombre}}</td>
                    <td scope="col">${{ $item->costo }}.00</td>
                    @if ($item->estatus == 'Pagado')
                        <td scope="col">
                            <button disabled class="px-3 py-2 bg-blue-200 text-blue-500 hover:bg-blue-500 hover:text-white rounded">Pagado</button>
                        </td>
                    @else
                    <td scope="col">
                        <button onclick="confirm('¿Está seguro?') || event.stopImmediatePropagation()" wire:click="delete({{ $item->apartado }})" class="px-3 py-2 bg-red-200 text-red-500 hover:bg-red-500 hover:text-white rounded">Liberar</button>
                        <button onclick="confirm('¿Está seguro?') || event.stopImmediatePropagation()" wire:click="update({{ $item->apartado }})" class="px-3 py-2 bg-green-200 text-green-500 hover:bg-green-500 hover:text-white rounded">Pagar</button>
                    </td>
                    @endif
                </tr>
            @empty
                <tr class="text-center">
                    <td colspan="4" class="py-3 italic">No hay información</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
    <x-dialog-modal wire:model="muestraTelefono">
        <x-slot name="title">
            <span class="font-bold text-center"> <h1>Ingresa el número</h1></span>
        </x-slot>

        <x-slot name="content">
            <div class="grid gap-6 mb-6 md:grid-cols-1">
                <div>
                    <label for="telefono" class="block mb-2 text-sm font-medium text-gray">Teléfono</label>
                    <input type="text" id="searchterm" wire:model="telefono" class="{{ $errors->has('telefono') ? ' border-red-500' : 'border-lime-500' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @error('telefono')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <div>
                <button wire:click="buscar()" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Buscar</button>
            </div>
            <div class="pt-5">

            </div>
            <div>
                <button wire:click="$set('muestraTelefono', false)" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Cancelar</button>
            </div>
            <div class="pt-5">

            </div>
        </x-slot>
    </x-dialog-modal>
</div>
