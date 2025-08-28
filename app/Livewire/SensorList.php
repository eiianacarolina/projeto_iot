<?php

namespace App\Livewire;

use App\Models\Sensor;
use Livewire\Component;

class SensorList extends Component
{
    public $perPage = 15;
    public $search = '';

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 15]
    ];

    public function render()
    {
        $sensor = Sensor::all();
        $sensor = Sensor::where('codigo', 'like', "%{$this->search}%")
        ->paginate($this->perPage);

        return view('livewire.sensor-list', compact('sensor'));
    }

     public function delete($id)
    {
        $sensor = Sensor::find($id);
        if($sensor != null){
            $sensor->delete();
        }

        session()->flash('message', 'Aluno deletado com sucesso.');
    }
}
