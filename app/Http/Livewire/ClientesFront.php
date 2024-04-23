<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Clientes;
use Illuminate\Support\Facades\DB;
use App\Models\Sorteos;

class ClientesFront extends Component
{
    public $data, $searchterm, $telefono, $nombre, $estado, $ciudad, $selected_id, $cliente, $boletos, $boletos_disponibles, $numeros, $datas;
    public $updateMode = false;
    public $muestraBoletos = false;
    public $cantidadBoletos = '';
    public $mostrar = false;
    public $numerosElegidos = array();
    public $botonApartar = true;
    protected $listeners = ['vender' => 'VerificarBoletos'];

    public function render()
    {
        $this->datas = Sorteos::where('status', '=', 1)->first();
        $this->boletos = DB::select('select de.boleto FROM detalles de
        INNER JOIN apartados apa on de.apartado_id = apa.id
        INNER JOIN sorteos so on apa.sorteo_id = so.id
        WHERE so.status = 1');
        $this->numeros = array();
        $this->boletos_disponibles = array();
        for ($i = 1; $i <= 60000; $i++)
        {
            array_push($this->numeros, $i);
        }
        foreach ($this->boletos as $item) {
            array_push($this->boletos_disponibles, $item->boleto);
        }
        return view('livewire.ClientesFront.clientes-front');
    }

    public function mount()
    {
        $this->data = Clientes::all();
    }

    public function search()
    {

        $this->validate([
            'searchterm' => 'required|min:10'
        ]);
        $this->data = Clientes::where('telefono', '=', $this->searchterm)->first();
        $this->nombre = $this->data->nombre;
        $this->estado = $this->data->estado;
        $this->ciudad = $this->data->ciudad;
        $this->botonApartar = false;

    }

    public function VerificarBoletos()
    {
        $this->muestraBoletos = true;
        $this->render();
    }

    public function selecciona($numero)
    {
        array_push($this->numerosElegidos, $numero);
        $this->mostrar = true;
        $this->render();
    }

    public function apartar()
    {

    }

}
