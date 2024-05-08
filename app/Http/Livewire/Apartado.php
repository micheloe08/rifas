<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Apartados;
use Illuminate\Support\Facades\DB;

class Apartado extends Component
{
    public $data, $apartado, $telefono;

    public $muestraTelefono = false;

    public function render()
    {
        $busqueda = $this->telefono ? DB::select('select clientes.telefono, clientes.nombre, apartados.id as apartado,
        apartados.costo, apartados.estatus from apartados inner JOIN clientes on apartados.cliente_id = clientes.id
        inner join sorteos on apartados.sorteo_id = sorteos.id where sorteos.status = 1
        AND clientes.telefono = :telefono', ['telefono' => $this->telefono])
        : DB::select('select clientes.telefono, clientes.nombre, apartados.id as apartado,
        apartados.costo, apartados.estatus from apartados inner JOIN clientes on apartados.cliente_id = clientes.id
        inner join sorteos on apartados.sorteo_id = sorteos.id where sorteos.status = 1');
        $this->apartado = $busqueda;
        $this->data = Apartados::with('cliente', 'sorteo')->get();
        return view('livewire.Apartado.apartado');
    }

    public function buscar()
    {
        $this->muestraTelefono = false;
        $this->render();
    }

    public function update($id)
    {
        $record = Apartados::find($id);
        if ($record) {
            $record->update([
                'estatus' => 'Pagado'
            ]);
        }
        $this->render();
    }
}
