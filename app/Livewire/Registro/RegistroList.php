<?php

namespace App\Livewire\Registro;

use App\Models\Registro;
use Livewire\Component;

class RegistroList extends Component
{
    public $sensor_id, $valor, $unidade, $data_hora;

    

    public function List(){
        $registro = Registro::find();
        $this->sensor_id = $registro->sensor->id;
        $this->valor = $registro->valor;
        $this->unidade = $registro->unidade;
        $this->data_hora = $registro->data_hora;
    }

    public function render()
    {
        $registro = Registro::OrderBy('data_hora', 'desc')->get();
        return view('livewire.registro.registro-list', compact('registros'));
    }
}
