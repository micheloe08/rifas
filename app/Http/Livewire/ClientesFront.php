<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Clientes;
use Illuminate\Support\Facades\DB;
use App\Models\Sorteos;
use App\Models\Apartados;
use App\Models\Detalle;

class ClientesFront extends Component
{
    public $data, $searchterm, $tarjetas, $telefono, $estatus, $nombre, $pronto_pago, $estado, $ciudad, $selected_id, $cliente, $boletos, $boletos_disponibles, $numeros, $datas, $promo, $cliente_id;
    public $updateMode = false;
    public $muestraBoletos = false;
    public $cantidadBoletos = '';
    public $mostrar = false;
    public $numerosElegidos = array();
    public $disabled = true;
    protected $listeners = ['selecciona'];
    public $showModal = false;
    public $newClass = false;
    public $cadena_final, $costo_final;

    public function render()
    {
        $this->boletos = DB::select('select de.boleto FROM detalles de
        INNER JOIN apartados apa on de.apartado_id = apa.id
        INNER JOIN sorteos so on apa.sorteo_id = so.id
        WHERE so.status = 1');
        $this->numeros = array();
        $this->boletos_disponibles = array();
        for ($i = 1; $i <= 1000; $i++)
        {
            array_push($this->numeros, $i);
        }
        foreach ($this->boletos as $item) {
            if (in_array($item->boleto, $this->numeros)) {
                unset($this->numeros[$item->boleto - 1]);
            }
        }
        $this->datas = Sorteos::where('status', '=', 1)->first();
        if ($this->newClass) {
            return view('livewire.ClientesFront.resumen');
        } else {
            return view('livewire.ClientesFront.clientes-front');
        }

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
        $this->cliente_id = $this->data->id;
        $this->nombre = $this->data->nombre;
        $this->estado = $this->data->estado;
        $this->ciudad = $this->data->ciudad;
        $this->disabled = false;

    }

    public function VerificarBoletos()
    {
        $this->muestraBoletos = true;
        $this->render();
    }

    public function selecciona($numero)
    {
        if (!in_array($numero, $this->numerosElegidos)) {
            array_push($this->numerosElegidos, $numero);
        }
        $this->mostrar = true;
        $this->render();
    }

    public function borrar($numero)
    {
        $this->numerosElegidos = array_diff($this->numerosElegidos, array($numero));
        if (count($this->numerosElegidos) == 0)
        {
            $this->mostrar = false;
        }
        $this->render();
    }

    public function apartar()
    {
        $this->validate([
            'nombre' => 'required',
            'searchterm' => 'required|integer|min_digits:10|max_digits:10',
            'estado' => 'required',
            'ciudad' => 'required'
        ]);
        $cantidad = count($this->numerosElegidos);
        $this->costo_final = ($cantidad * $this->datas->costo);
        Apartados::create([
            'cliente_id' => $this->cliente_id,
            'sorteo_id' => $this->datas->id,
            'boletos' => $cantidad,
            'costo' => $this->costo_final,
            'pronto_pago' => $this->pronto_pago ?: 0,
            'promo' => $this->promo ?: 0,
            'estatus' => $this->estatus ?: 'Apartado'
        ]);

        $ultimoId = Apartados::latest()->first()->id;
        $cadenas = array();
        foreach ($this->numerosElegidos as $elegidos)
        {
            Detalle::create([
                'apartado_id' => $ultimoId,
                'boleto' => $elegidos
            ]);
            $cadenas[] = $elegidos;
        }
            $apartado = Apartados::latest()->first()->id;
            $this->cadena_final = implode(', ', $cadenas);
            $this->newClass = true;
            $this->render();
    }

}
