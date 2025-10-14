<?php

namespace App\Livewire\Sensor;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensorEdit extends Component
{
    public $ambiente_id, $codigo, $tipo, $descricao, $status, $sensorId;

    protected function rules() {
        return[
        'codigo' => 'required|unique:sensors,codigo,' . $this->sensorId
        ];
   }

    protected $messages = [
        'codigo.unique' => 'O campo é único',
        'codigo.required' => 'O campo é obrigatório'
    ];

    public function mount($id)
    {
        $sensor = Sensor::find($id);

       if ($sensor == null) {
            return redirect()->route('sensor.list');
        }

        $this->sensorId = $sensor->id;
        $this->ambiente_id = $sensor->ambiente_id;
        $this->codigo = $sensor->codigo;
        $this->tipo= $sensor->tipo;
        $this->descricao = $sensor->descricao;
        $this->status = (bool) $sensor->status;
        
    }

    public function salvar(){

        $this->validate();

        $sensor = Sensor::find($this->sensorId);

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
