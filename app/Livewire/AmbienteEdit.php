<?php

namespace App\Livewire;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteEdit extends Component
{
    public $nome, $descricao, $status, $ambienteId;

    public function mount($id)
    {
        $ambiente = Ambiente::find($id);

        if ($ambiente == null) {
            return redirect()->route('ambiente.list');
        }

        $this->ambienteId = $ambiente->id;
        $this->nome = $ambiente->nome;
        $this->descricao = $ambiente->descricao;
        $this->status = $ambiente->status;
    }

    //gravar no banco
    public function salvar()
    {
        $ambiente = Ambiente::find($this->ambienteId);

        $ambiente->update([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'status' => $this->status
        ]);

        return redirect()->route('ambiente.list');
    }

    public function render()
    {
        return view('livewire.ambiente-edit');
    }
}
