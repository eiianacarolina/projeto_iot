<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="col-12">
            <div class="input-group rounded shadow-sm">
                <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                <input type="text" wire:model.live="search" class="form-control border-start-0"
                    placeholder="Buscar sensores...">
            </div>
        </div>

    </div>
    <div class="card ">
        <div class="shadow rounded-4 ">
            <div class="card-body p-0">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Id</th>
                            <th>ID Sensor</th>
                            <th>Valor</th>
                            <th>Unidade</th>
                            <th>Data e hora</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- ele vai colocar os dados do funcionarios e coloca na variavel f, ele vai 'popular  nossa tabela' --}}
                        @foreach ($registros as $registro)
                            <tr>
                                <td>{{ $registro->id }}</td>
                                <td>{{ $registro->sensor->id }}</td>
                                <td>{{ $registro->valor }}</td>
                                <td>{{ $registro->unidade }}</td>
                                <td>{{ $registro->data_hora }}</td>
                                <td>

                                    <button wire:click="delete({{ $registro->id }})"
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
        </div>
    </div>
</div>
