<?php

namespace App\Livewire;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteList extends Component
{
    public $perPage = 15;
    public $search = '';

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 15]
    ];

    public function render()
    {
        $ambiente = Ambiente::all();
        $ambiente = Ambiente::where('nome', 'like', "%{$this->search}%")
        ->paginate($this->perPage);

        return view('livewire.ambiente-list', compact('ambiente'));
    }

     public function delete($id)
    {
        $ambiente = Ambiente::find($id);
        if($ambiente != null){
            $ambiente->delete();
        }

        session()->flash('message', 'Ambiente deletado com sucesso.');
    }
}
