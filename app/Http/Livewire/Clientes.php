<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Clientes as Cliente;

class Clientes extends Component
{

    public $telefono, $nombre, $estado, $ciudad, $data;
    public $update = false;
    public $search = '';

    public function render()
    {
        $this->data = Cliente::all();
        return view('livewire.Clientes.clientes');
    }
}
