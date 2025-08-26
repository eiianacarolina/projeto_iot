<?php

namespace App\Livewire;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensorEdit extends Component
{
     public $ambiente_id, $codigo, $tipo, $descricao, $status;

    protected $rules = [
        'codigo' => 'unique:sensors,codigo',
    ];

    protected $messages = [
        'codigo.unique' => 'O campo é único',
    ];

    public function mount($id)
    {
        $sensor = Sensor::find($id);

       if ($sensor == null) {
            return redirect()->route('sensor.list');
        }

        $this->ambiente_id = $this->ambiente_id;
        $this->codigo = $this->codigo;
        $this->tipo= $this->tipo;
        $this->descricao = $this->descricao;
        $this->status= $this->status;
    }

    public function salvar(){

        $this->validate();

        $sensor = Sensor::find($this->sensor_id);

        $sensor->update([
            'ambiente_id' => $this->ambiente_id,
            'codigo' => $this->codigo,
            'tipo'=> $this->tipo,
            'descricao' => $this->descricao,
            'status'=> $this->status
        ]);
        $sensor->save();

        return redirect()->route('sensor.list');
    }

    public function render()
    {
        $ambientes = Ambiente::all();
        return view('livewire.sensor-edit', compact('ambientes'));
    }
}
