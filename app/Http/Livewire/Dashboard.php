<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Clientes;
use App\Models\Sorteos;
use App\Models\Apartados;
use App\Models\Detalle;
use Illuminate\Support\Facades\DB;

class Dashboard extends Component
{
    public $sorteos, $num_apartados, $num_pagados, $clientes, $boletos, $apartados, $conteo_apartados, $dinero_pagado, $boletosPrueba;
    public $paga = 0;
    public $pagados = 0;
    public function render()
    {
        $this->apartados = Apartados::with('cliente', 'sorteo')->get();
        $this->sorteos = Sorteos::where('status', '=', 1)->first();
        $this->clientes = DB::table('clientes')->count();
        $this->conteo_apartados = DB::table('apartados')->count();
        $this->num_apartados = DB::table('detalles')->count();
        $pagados = DB::select('select boletos, costo from apartados where estatus = :pagado', ['pagado' => 'Pagado']);
        foreach ($pagados as $pagado) {
            $this->paga += $pagado->boletos;
            $this->pagados += $pagado->costo;
        }
       $this->num_pagados = $this->paga;
       $this->dinero_pagado = $this->pagados;
       return view('livewire.dashboard');
    }

    public function actualizar()
    {
        $this->boletosPrueba = Detalle::all();
        foreach ($this->boletosPrueba as $item) {
            DB::update('update boletos set status = 1 where boleto = :id', ['id' => $item->boleto]);
        }
        return 'Exito';
    }
}
