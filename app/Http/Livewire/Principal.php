<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Sorteos;

class Principal extends Component
{
    public $data;
    public $boletaje = false;
    public function render()
    {
        $this->data = Sorteos::where('status', '=', 1)->first();
        if ($this->boletaje) {
            return view('boletos');
        } else {
            return view('livewire.Principal.principal');
        }

    }

}
