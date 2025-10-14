<?php

namespace App\Livewire\Ambiente;

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
        $ambientes = Ambiente::where('nome', 'like', "%{$this->search}%")->paginate($this->perPage);

        return view('livewire.ambiente-list', compact('ambientes'));
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
