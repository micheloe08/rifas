<div class="dark:bg-gray-800 max-w-1/2 W-1/2 ">
    <div class="p-1 mb-4 text-xl text-center rounded-lg  text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80" role="alert">
                <span class="font-medium border-cyan-700 border-spacing-1"> Este boleto es válido siempre y cuando realices tu pago en el tiempo correspondiente y envíes tu comprobante de pago a nuestro WhatsApp. (No ocupas alguna otra confirmación)</span>
            </div>
        <div class="flex gap-12 mb-12 md:grid-cols-1 sm-gap-4 border-green-500">
            <div class="w-full">
                <x-card title="Apartado" informacion="50" ruta="{{ route('clientes') }}" imagen="{{ asset('storage/'.$datas->imagen1) }}" texto='text-left'>
                    <span class="font-bold text-green-500">{{"Nombre:"}}</span> {{$nombre}}<br/><br>
                    <span class="font-bold text-green-500">{{"Ubicación:"}}</span> {{$ciudad}} {{", "}} {{$estado}}<br/><br>
                    <span class="font-bold text-green-500">{{"Monto a Pagar: $"}}</span> {{ number_format($costo_final, 2) }}<br/><br>
                    <span class="font-bold text-green-500">{{"Boletos:"}}</span> {{$cadena_final}}<br/><br>
                </x-card>
            </div>
        </div>
        <div class="p-1 mb-4 text-xl text-white text-center rounded-lg bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80" role="alert">
            <span class="font-medium border-cyan-700 border-spacing-1"> ⚠️Atención este es tu boleto oficial⚠️, toma una captura de pantalla y guardala.<br> (✅ = pago confirmado, ⏳ = pago pendiente)</span>
        </div>
        <div class="container py-10 px-10 mx-0 min-w-full flex flex-col items-center">
            <button class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"><a href="https://wa.me/5216721268972?text=Hola+qué+tal!+Aparte+los+siguientes+numeros+{{$cadena_final}}.%0A%0AEn+la+Edición+{{ $datas->descripcion }}%0A%0ANombre:+{{$nombre}}%0A%0AAtención%0A%0A------------------------------------------%0A%0AEl siguiente paso es enviar foto del comprobante de pago por aquí%0A%0ATus boletos quedan apartados por 24 hrs%0A%0A">TERMINAR</a></button>
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

<div class="max-w-sm rounded overflow-hidden shadow-lg">
    <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
      <p class="text-gray-700 text-base">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
      </p>
    </div>
    <div class="px-6 pt-4 pb-2">
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
    </div>
  </div>
