
    <div class="grid gap-12 mb-12 md:grid-cols-2">
        <div>
            <x-card title="Numero de clientes" informacion="50" ruta="{{ route('clientes') }}">
                <ul class="font-medium text-white">
                    <li>
                        {{ "Tiraje "}} {{number_format($sorteos->tiraje, 0, '.', ',')}}
                    </li>
                    <li>
                        {{ "Premio $"}} {{$sorteos->premio_principal}}
                    </li>
                    <li>
                        {{ "Costo $"}} {{$sorteos->costo}}
                    </li>
                </ul>
            </x-card>
        </div>
        <div>
            <x-card title="{{$sorteos->descripcion}}" informacion="50" ruta="{{ route('clientes') }}">
                <ul class="font-medium text-white">
                    <li>
                        {{ "Tiraje "}} {{number_format($sorteos->tiraje, 0, '.', ',')}}
                    </li>
                    <li>
                        {{ "Premio $"}} {{$sorteos->premio_principal}}
                    </li>
                    <li>
                        {{ "Costo $"}} {{$sorteos->costo}}
                    </li>
                </ul>
            </x-card>
        </div>
        <div>
            <x-card title="Numero de clientes" informacion="50" ruta="{{ route('clientes') }}">
                <ul class="font-medium text-white">
                    <li>
                        {{ "Tiraje "}} {{number_format($sorteos->tiraje, 0, '.', ',')}}
                    </li>
                    <li>
                        {{ "Premio $"}} {{$sorteos->premio_principal}}
                    </li>
                    <li>
                        {{ "Costo $"}} {{$sorteos->costo}}
                    </li>
                </ul>
            </x-card>
        </div>
        <div>
            <x-card title="{{$sorteos->descripcion}}" informacion="50" ruta="{{ route('clientes') }}">
                <ul class="font-medium text-white">
                    <li>
                        {{ "Tiraje "}} {{number_format($sorteos->tiraje, 0, '.', ',')}}
                    </li>
                    <li>
                        {{ "Premio $"}} {{$sorteos->premio_principal}}
                    </li>
                    <li>
                        {{ "Costo $"}} {{$sorteos->costo}}
                    </li>
                </ul>
            </x-card>
        </div>
    </div>

