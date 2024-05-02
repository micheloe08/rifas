<div class="dark:bg-gray-800 max-w-1/2 W-1/2 ">
            <div class="p-1 mb-4 text-xl text-white text-center rounded-lg bg-gray-800 dark:bg-gray-800 dark:text-white" role="alert">
                <span class="font-medium border-cyan-700 border-spacing-1"> Este boleto es válido siempre y cuando realices tu pago en el tiempo correspondiente y envíes tu comprobante de pago a nuestro WhatsApp. (No ocupas alguna otra confirmación)</span>
            </div>
        <div class="grid gap-12 mb-12 md:grid-cols-2 sm-gap-4 ">
            <div class="mr-3 ml-3">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <img src = "{{ asset('storage/'.$datas->imagen1) }}"/>
                </div>
            </div>
            <div class="mr-3 ml-3">
                <x-card title="Apartado" informacion="50" ruta="{{ route('clientes') }}">
                    <span class="font-bold text-green-500">{{"Nombre:"}}</span> {{$nombre}}<br/><br>
                    <span class="font-bold text-green-500">{{"Ubicación:"}}</span> {{$ciudad}} {{", "}} {{$estado}}<br/><br>
                    <span class="font-bold text-green-500">{{"Monto a Pagar: $"}}</span> {{ number_format($costo_final, 2) }}<br/><br>
                    <span class="font-bold text-green-500">{{"Boletos:"}}</span> {{$cadena_final}}<br/><br>
                </x-card>
            </div>
        </div>
        <div class="p-1 mb-4 text-xl text-white text-center rounded-lg bg-gray-500 dark:text-white" role="alert">
            <span class="font-medium border-cyan-700 border-spacing-1"> ⚠️Atención este es tu boleto oficial⚠️, toma una captura de pantalla y guardala.<br> (✅ = pago confirmado, ⏳ = pago pendiente)</span>
        </div>
        <div class="container py-10 px-10 mx-0 min-w-full flex flex-col items-center">
            <button class="bg-green-700 text-white hover:bg-green-500 font-bold py-2 px-4 mt-3 rounded"><a href="https://wa.me/5216721268972?text=Hola+qué+tal!+Aparte+los+siguientes+numeros+{{$cadena_final}}.%0A%0AEn+la+Edición+{{ $datas->descripcion }}%0A%0ANombre:+{{$nombre}}%0A%0AAtención%0A%0A------------------------------------------%0A%0AEl siguiente paso es enviar foto del comprobante de pago por aquí%0A%0ATus boletos quedan apartados por 24 hrs%0A%0A">TERMINAR</a></button>
          </div>
        <div class="grid gap-4 mb-4 w-full bg-gray-200">
            <dl class="max-w-full text-white divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                <div class="p-1 mb-4 text-xl text-white text-center rounded-lg bg-green-700 hover:bg-green-500 dark:text-white" role="alert">
                    <span class="font-medium border-cyan-700 border-spacing-1"> En estas cuentas podras pagar en efectivo desde cualquier tienda OXXO, SUPER, BANCOS O FARMACIAS, ETC.</span>
                </div>
                <div class="container py-10 px-10 mx-0 min-w-full flex flex-col items-center">
                    <span class="mb-1 text-black text-2xl dark:text-gray-400">Bancoppel</span>
                    <dt class="mb-1 text-black md:text-2xl dark:text-gray-400">Tarjeta</dt>
                    <dd class="text-2xl font-bold text-black">4169 1606 0069 1381</dd>
                </div>
                <div class="container py-10 px-10 mx-0 min-w-full flex flex-col items-center">
                    <dt class="mb-1 text-black md:text-2xl dark:text-gray-400">Tarjeta</dt>
                    <dd class="text-2xl font-bold text-black">4169 1608 4075 3777</dd>
                </div>
                <div class="container py-10 px-10 mx-0 min-w-full flex flex-col items-center">
                    <dt class="mb-1 text-black md:text-2xl dark:text-gray-400">Tarjeta</dt>
                    <dd class="text-2xl font-bold text-black">4169 1604 5382 9252</dd>
                </div>
            </dl>
        </div>
</div>

https://wa.me/526331266805?&text=Hola,%20Aparte%20los%20siguientes%20N%C3%BAmeros,%2012192.%0a%0aEdici%C3%B3n,%20GRAN%20EDICION%20%2368%0a%0aNombre:%20Oscar%20Michel%20Velazquez%20Arredondo%0a%0a-------------%0a%0aClick%20para%20ver%20las%20cuentas%20para%20Realizar%20el%20Pago%20%0a%20https%3A%2F%2Fsorteossonorense.com%2Fmetodos-de-pago%0a%0aM%C3%A1ndanos%20por%20este%20medio%20el%20comprobante%20de%20pago.%20%0a%0aClick%20para%20ver%20el%20estatus%20de%20tus%20n%C3%BAmeros%20%F0%9F%91%87%F0%9F%8F%BC%20https://sorteossonorense.com/evento/edicion-68/ticket/6677519117%20%0a%0aEnv%C3%ADanos%20este%20mensaje%20%3E%3E%3E%3E%0a%0a
