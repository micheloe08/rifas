<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Clientes;
use Illuminate\Support\Facades\DB;
use App\Models\Sorteos;
use App\Models\Apartados;
use App\Models\Detalle;
use App\Models\Boletos;

class ClientesFront extends Component
{
    public $data, $searchterm, $color, $tarjetas, $telefono, $cantidad_boletos, $estatus, $nombre, $pronto_pago, $estado, $ciudad, $selected_id, $cliente, $boletos, $boletos_disponibles, $numeros, $datas, $promo, $cliente_id;
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
    public $buscar = '';
    public $open = false;
    public $animar = false;
    public $alerta = false;

    public function render()
    {
        $this->boletos = Boletos::inRandomOrder()->limit(500)->get();
        $this->numeros = array();
        $this->boletos_disponibles = array();
        foreach ($this->boletos as $item) {
            array_push($this->numeros, $item);
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
            'searchterm' => 'required|min_digits:10|max_digits:13',
        ]);
        if($this->data = Clientes::where('telefono', '=', $this->searchterm)->first())
        {
            $this->cliente_id = $this->data->id;
            $this->nombre = $this->data->nombre;
            $this->estado = $this->data->estado;
            $this->ciudad = $this->data->ciudad;
            $this->disabled = false;
        }
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
            'searchterm' => 'required',
            'estado' => 'required',
            'ciudad' => 'required'
        ]);
        if (!$this->cliente_id) {
            Clientes::create([
                'telefono' => $this->searchterm,
                'nombre' => $this->nombre,
                'estado' => $this->estado,
                'ciudad' => $this->ciudad
            ]);
            $this->cliente_id = Clientes::latest()->first()->id;
        }
        $cantidad = count($this->numerosElegidos);
        if ($cantidad > 0) {
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
                $actualizarBoleto = Boletos::find($elegidos);
                $actualizarBoleto->status = 1;
                $actualizarBoleto->save();
                $cadenas[] = $elegidos;
            }
                $apartado = Apartados::latest()->first()->id;
                $this->cadena_final = implode(', ', $cadenas);
                $this->newClass = true;
                $this->render();
            } else {
                $this->alerta = false;
                session()->flash('message', 'Debes elegir al menos uno');
            }

    }

    public function buscarDato()
    {
        $this->validate([
            'buscar' => 'required|numeric|min:0|not_in:0|max:59999|max_digits:5'
        ]);
        $numero = DB::select('select boletos.boleto FROM
        boletos
        where boletos.status = 1 and boletos.boleto = :numero', ['numero' => $this->buscar]);

        if (!$numero) {
            $this->selecciona($this->buscar);
            $this->buscar = '';
        } else {
            $this->alerta = false;
            session()->flash('message', 'Numero ya apartado');
            $this->buscar = '';
        }
    }

    public function aleatorio()
    {
        $contador = 0;
        $this->open = false;
        $this->animar = false;
        $numero = Boletos::inRandomOrder()->where('status', '=', 0)->limit($this->cantidad_boletos)->get();
            foreach ($numero as $n) {
                $this->selecciona($n->boleto);
            }
        $this->alerta = true;
        session()->flash('message', 'Generados Correctamente');
    }

}
