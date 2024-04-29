<div class="dark:bg-gray-800 max-w-7xl2">
            <div class="p-1 mb-4 text-xl text-white text-center rounded-lg bg-gray-800 dark:bg-gray-800 dark:text-white" role="alert">
                <span class="font-medium border-cyan-700 border-spacing-1"> Este boleto es válido siempre y cuando realices tu pago en el tiempo correspondiente y envíes tu comprobante de pago a nuestro WhatsApp. (No ocupas alguna otra confirmación)</span>
            </div>
        <div class="grid gap-12 mb-12 md:grid-cols-2 sm-gap-4">
            <div class="mr-3 ml-3">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <img src = "{{ asset('storage/'.$datas->imagen1) }}"/>
                </div>
            </div>
            <div class="mr-3 ml-3">
                <x-card title="Paso 2:" informacion="50" ruta="{{ route('clientes') }}">
                    <span class="font-medium">{{"Nombre:"}} {{$nombre}}</span><br/>
                    <span class="font-medium">{{"Ubicación:"}} {{$ciudad}} {{", "}} {{$estado}}</span><br/>
                    <span class="font-medium">{{"Monto a Pagar: $"}} {{ number_format($costo_final, 2) }}</span><br/>
                    <span class="font-medium">{{"Boletos:"}} {{$cadena_final}}</span>
                </x-card>
            </div>
        </div>
</div>
