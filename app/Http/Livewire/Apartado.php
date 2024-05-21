<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Apartados;
use Illuminate\Support\Facades\DB;
use App\Models\Detalle;

class Apartado extends Component
{
    public $data, $apartado, $telefono, $numeroBusqueda, $boletoBuscar;
    public $alerta = false;
    public $muestraTelefono = false;
    public $muestra = false;
    public $ganador = false;
    public $buscadorModal = false;

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
        if ($this->muestra) {
            return view('livewire.Apartado.buscador');
        }
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

    public function delete($id)
    {
        $apartado = Apartados::findOrFail($id);
        if ($apartado) {
            DB::select('delete from detalles where apartado_id = :apartado', ['apartado' => $id]);
            $apartado->delete();
            $this->alerta = true;
            session()->flash('message', 'Liberados Exitosamente!');
        } else {
            $this->alerta = false;
            session()->flash('message', 'Fallo al Liberar!');
        }
    }

    public function inicializar()
    {
        $this->muestra = true;
        $this->render();
    }

    public function buscarBoleto()
    {
        $buscar = DB::select('
        select clientes.nombre, clientes.telefono, clientes.ciudad, clientes.estado, detalles.boleto, apartados.estatus
        from detalles
        inner join apartados on detalles.apartado_id = apartados.id
        inner join clientes on apartados.cliente_id = clientes.id
        inner join sorteos on apartados.sorteo_id = sorteos.id
        where sorteos.status = 1 and detalles.boleto = :boleto', ['boleto' => $this->boletoBuscar]);
        if (!$buscar) {
            session()->flash('message', 'No Fue Vendido este Boleto!');
        }
        $this->ganador = $buscar;
        $this->buscadorModal = true;
    }

    public function finalizar()
    {
        $this->muestra = false;
        $this->buscadorModal = false;
        $this->render();
    }
}
