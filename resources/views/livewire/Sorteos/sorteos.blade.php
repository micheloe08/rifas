<div class="dark:bg-gray-800 max-w-7xl2">

    @if($updateMode)
        @include('livewire.Sorteos.update')
    @else
        @include('livewire.Sorteos.create')
    @endif
    @if (session()->has('message'))
    @if ($alerta)
        <x-success-alert />
    @else
        <x-danger-alert />
    @endif
    @endif
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col">#</th>
                <th scope="col">descripción</th>
                <th scope="col">Costo</th>
                <th scope="col">Fecha sorteo Principal</th>
                <th scope="col">Tiraje</th>
                <th scope="col">Primer Lugar</th>
                <th scope="col">Imagen</th>
                <th scope="col">Estatus</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $item)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $item->id }} </th>
                    <td scope="col">{{ $item->descripcion }}</td>
                    <td scope="col">{{ $item->costo}}</td>
                    <td scope="col">{{ $item->fecha_sorteo_principal }}</td>
                    <td scope="col">{{ $item->tiraje }}</td>
                    <td scope="col">{{ $item->premio_principal }}</td>
                    <td scope="col"><img src = "{{ asset('storage/'.$item->imagen1) }}" width="150px"></td>
                    @if ($item->status === 1)
                    <td scope="col"><button class="px-3 py-2 bg-green-700 text-white hover:bg-green-500 hover:text-white rounded">Activo</button></td>
                    @else
                    <td scope="col"><button class="px-3 py-2 bg-gray-200 hover:bg-gray-50 rounded">Finalizado</button></td>
                    @endif
                    <td scope="col">
                        <button wire:click="edit({{ $item->id }})" class="px-3 py-2 bg-blue-200 text-blue-500 hover:bg-blue-500 hover:text-white rounded">Editar</button>
                    </td>
                </tr>

            @empty
                <tr class="text-center">
                    <td colspan="4" class="py-3 italic">No hay información</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

