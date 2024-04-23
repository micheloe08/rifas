<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Sorteos as Sorteo;
use Livewire\WithFileUploads;

class Sorteos extends Component
{
    use WithFileUploads;

    public $data, $descripcion, $costo, $fecha_sorteo_principal,
    $fecha_sorteo_preliminar, $premio_principal, $premio_preliminar, $bono,
    $imagen1, $imagen2, $imagen3, $tiraje, $status, $ganador_preliminar,
    $ganador_principal, $bono_ganado, $evidencia, $selected_id;

    public $updateMode = false;
    public $searchTerm;

    public function render()
    {
        $this->data = Sorteo::all();
        return view('livewire.Sorteos.sorteos');
    }

    private function resetInput()
    {
        $this->descripcion = null;
        $this->costo = null;
        $this->fecha_sorteo_preliminar = null;
        $this->fecha_sorteo_principal = null;
        $this->premio_principal = null;
        $this->premio_preliminar = null;
        $this->bono = null;
        $this->imagen1 = null;
        $this->imagen2 = null;
        $this->imagen3 = null;
        $this->tiraje = null;
        $this->status = null;
        $this->ganador_preliminar = null;
        $this->ganador_principal = null;
        $this->bono_ganado = null;
        $this->evidencia = null;
    }

    public function store()
    {
        $this->validate([
            'descripcion' => 'required',
            'costo' => 'required',
            'premio_principal' => 'required',
            'imagen1' => 'required|image',
            'imagen2' => 'required|image',
            'tiraje' => 'required'
        ]);

        $imagen1 = $this->imagen1->store('images', 'public');
        $imagen2 = $this->imagen2->store('images', 'public');

        Sorteo::create([
            'descripcion' => $this->descripcion,
            'costo' => $this->costo,
            'fecha_sorteo_principal' => $this->fecha_sorteo_principal,
            'premio_principal' => $this->premio_principal,
            'imagen1' => $imagen1,
            'imagen2' => $imagen2,
            'tiraje' => $this->tiraje,
            'status' => true
        ]);

        $this->resetInput();
    }
}
