
    <div class="grid gap-4 mb-4 md:grid-cols-2  dark:bg-dark-eval-1 font-medium text-black bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
        <div>
                <x-card-body title="{{$sorteos->descripcion}}" informacion="50" ruta="{{ route('clientes') }}">
                    <ul class="font-medium text-black">
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
                </x-card-body>
        </div>
        <div>
                <x-card-body title="Clientes" informacion="50" ruta="{{ route('clientes') }}">
                    <ul class="font-medium text-black">
                        <li>
                            {{ "Total de clientes: "}} {{$clientes}}
                        </li>

                    </ul>
                </x-card-body>
        </div>
        <div>
            <x-card-body title="Apartados" informacion="50" ruta="{{ route('clientes') }}">
                <ul class="font-medium text-black">
                    <li>
                        {{ "Total de Apartados: "}} {{$conteo_apartados}}
                    </li>
                    <li>
                        {{ "Total Numeros Apartados"}} {{$num_apartados}}
                    </li>
                    <li>
                        {{ "Total Numeros Pagados"}} {{$num_pagados}}
                    </li>
                    <li>
                        {{ "Total Ingresos $"}} {{$dinero_pagado}}.00
                    </li>
                </ul>
            </x-card-body>
        </div>
    </div>
