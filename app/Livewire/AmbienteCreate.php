<?php

namespace App\Livewire;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteCreate extends Component
{
    public $nome, $descricao, $status;

    protected $rules = [
        'nome'=> 'required',
        'descricao' => 'required',
    ];

    protected $messages = [
        'nome.required' => 'O campo é obrigatório',
        'descricao.required' => 'O campo é obrigatório'
    ];

    public function store()
    {
        $this->validate();

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
