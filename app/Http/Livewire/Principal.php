<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Sorteos;
use Illuminate\Support\Facades\DB;
use App\Models\Clientes;

class Principal extends Component
{
    public $data, $depurar, $comprados, $clientes, $ciudad, $estado, $nombre;
    public $boletaje = false;
    public $consulta = false;
    public $mirar = false;
    public $alerta = false;

    public function render()
    {
        $this->data = Sorteos::where('status', '=', 1)->first();
        if ($this->mirar) {
            return view('livewire.Principal.resumido');
        } else {
            return view('livewire.Principal.principal');
        }

    }

    public function consultarBoletos()
    {
        $encontrar = DB::select('select detalles.boleto from detalles
        inner JOIN apartados on detalles.apartado_id = apartados.id
        inner join clientes on apartados.cliente_id = clientes.id
        inner join sorteos on apartados.sorteo_id = sorteos.id
        where sorteos.status = 1 AND clientes.telefono = :telefono', ['telefono' => $this->depurar]);

        $clientes = Clientes::where('telefono', '=', $this->depurar)->first();

        if ($encontrar) {
            $conjunto = array();
            foreach ($encontrar as $item){
                $conjunto[] = $item->boleto;
            }
            $this->comprados = implode(', ', $conjunto);

            $this->nombre = $clientes->nombre;
            $this->clientes = $clientes->telefono;
            $this->estado = $clientes->estado;
            $this->ciudad = $clientes->ciudad;
            $this->comprados = $this->comprados;
            $this->mirar = true;
            $this->depurar = null;
            $this->consulta = false;
            $this->render();
        } else {
            $this->alerta = false;
            $this->comprados = 'No se encontraron boletos en esta rifa con el numero ' . $this->depurar;
            session()->flash('message', $this->comprados);
            $this->mirar = false;
            $this->depurar = null;
            $this->consulta = true;
            $this->render();
        }

    }

}
