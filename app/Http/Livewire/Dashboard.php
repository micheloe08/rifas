<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Clientes;
use App\Models\Sorteos;

class Dashboard extends Component
{
    public $sorteos, $clientes, $boletos;

    public function render()
    {
        $this->sorteos = Sorteos::where('status', '=', 1)->first();
        $this->clientes = Clientes::all();
        $this->boletos = 800;
        return view('livewire.dashboard');
    }
}
