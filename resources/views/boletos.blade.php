<div class="grid gap-4 mb-4 md:grid-cols-2">
    <button type="button" wire:click="mandaBoletos({{1}})" class="px-3 py-2 bg-green-700 text-white hover:bg-green-500 hover:text-white rounded">Elige 1 Boleto por ${{ $data->costo }}</button>
    <button type="button" wire:click="mandaBoletos({{5}})" class="px-3 py-2 bg-green-700 text-white hover:bg-green-500 hover:text-white rounded">Elige 5 Boletos por ${{ $data->costo * 5 }}</button>
    <button type="button" wire:click="mandaBoletos({{10}})" class="px-3 py-2 bg-green-700 text-white hover:bg-green-500 hover:text-white rounded">Elige 10 Boletos por ${{ $data->costo * 10}}</button>
    <button type="button" wire:click="mandaBoletos({{15}})" class="px-3 py-2 bg-green-700 text-white hover:bg-green-500 hover:text-white rounded">Elige 15 Boletos por ${{ $data->costo * 15}}</button>
    <button type="button" wire:click="mandaBoletos({{20}})" class="px-3 py-2 bg-green-700 text-white hover:bg-green-500 hover:text-white rounded">Elige 20 Boletos por ${{ $data->costo * 20}}</button>
    <button type="button" wire:click="mandaBoletos({{0}})" class="px-3 py-2 bg-green-700 text-white hover:bg-green-500 hover:text-white rounded">Elige Libre</button>
</div>
  <div class="pt-5">

  </div>
</div>
