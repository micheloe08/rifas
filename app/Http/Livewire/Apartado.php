<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Apartados;

class Apartado extends Component
{
    public $data;

    public function render()
    {
        $this->data = Apartados::with('cliente', 'sorteo')->get();
        return view('livewire.Apartado.index');
    }
}
