<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="col-8">
            <h2 class="fw-bold text-danger mb-1">Ambientes</h2>
        </div>
        <a class="btn btn-danger btn-lg" href="{{ route('ambiente.create') }}">
            Novo Ambiente
        </a>
    </div>
    <div class="card ">
        <div class="shadow rounded-4 ">
            <div class="card-header d-flex justify-content-between align-items-center nomeTabela corTabela">
                <div class="input-group rounded shadow-sm me-5 ">
                    <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                    <input type="text" wire:model.live="search" class="form-control border-start-0"
                        placeholder="Buscar ambientes...">

                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ambiente as $a)
                            <tr>
                                <td>{{ $a->nome }}</td>
                                <td>{{ $a->descricao }}</td>
                                <td>{{ $a->status == 1 ? 'Ativo' : 'Inativo' }}</td>
                                <td>
                                    <a href="{{ route('ambiente.edit', $a->id) }}" class="btn btn-warning me-1"
                                        data-bs-toggle="tooltip" title="Editar">Editar
                                    </a>

                                    <button wire:click="delete({{ $a->id }})"
                                        class="btn btn-sm btn-outline-danger me-1" title="Excluir"
                                        wire:confirm="Tem certeza?">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $ambiente->links() }}
        </div>
    </div>
</div>
