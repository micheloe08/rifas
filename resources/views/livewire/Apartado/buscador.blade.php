<div>
<div class="grid gap-6 mb-6 md:grid-cols-1">
      <x-label
      for="boletoBuscar"
      class="block mb-2 text-sm font-medium"
      >
        Ingrese un numero:
      </x-label>
      <x-input
        id="boletoBuscar"
        name="boletoBuscar"
        type="text"
        class="{{ $errors->has('boletoBuscar') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        wire:model="boletoBuscar"
      >
      @error('boletoBuscar')
      <span class="text-red-500 text-xs italic">{{ $message }}</span>
      @enderror
      </x-input>
      <x-button
        wire:click="buscarBoleto()"
      >
        Buscar
      </x-button>
</div>

<x-dialog-modal wire:model="buscadorModal">
    <x-slot name="title">
        Información del Boleto
    </x-slot>
    <x-slot name="content">
        <div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col"># Boleto</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Situación</th>
                    </tr>
                </thead>
                <tbody>
    @if ($ganador)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $ganador[0]->boleto }} </th>
                    <td scope="col">{{ $ganador[0]->telefono }}</td>
                    <td scope="col">{{ $ganador[0]->nombre}}</td>
                    <td scope="col">{{ $ganador[0]->estatus}}</td>
                </tr>
            </tbody>
        </table>
        <span class="text-green-500 text-xl italic text-center">¡¡Felicidades al Ganador!! {{$ganador[0]->nombre}}</span>
    </div>
    @else
        <x-danger-alert>

        </x-danger-alert>
    </div>
@endif
    </x-slot>
    <x-slot name="footer">
        <x-button wire:click="finalizar()">
            Cerrar
        </x-button>
    </x-slot>
</x-dialog-modal>
</div>
