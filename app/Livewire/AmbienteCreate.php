<?php

namespace App\Livewire;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteCreate extends Component
{
    public $nome, $descricao, $status;

    public function store()
    {
        Ambiente::create([
            'nome'=> $this->nome,
            'descricao' => $this->descricao,
            'status'=> $this->status
        ]);

        return redirect()->route('ambiente.list');
    }

    public function render()
    {
        return view('livewire.ambiente-create');
    }
}
