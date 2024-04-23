<div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Nombre</th>
                <th scope="col">Estado</th>
                <th scope="col">Ciudad</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $item)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $item->id }} </th>
                    <td scope="col">{{ $item->telefono }}</td>
                    <td scope="col">{{ $item->nombre}}</td>
                    <td scope="col">{{ $item->estado }}</td>
                    <td scope="col">{{ $item->ciudad }}</td>
                </tr>
            @empty
                <tr class="text-center">
                    <td colspan="4" class="py-3 italic">No hay información</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
