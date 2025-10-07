<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-light rounded">
                <div class="card-header text-center fw-bold text-danger mb-1">
                    <h4>Cadastro de Sensores</h4>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="store">
                        <div class="mb-3">
                            <label for="ambiente_id" class="form-label">Ambiente</label>
                            <select class="form-select" wire:model.defer='ambiente_id' id="ambiente_id">
                                 <option selected>Selecione o ambiente</option>

                                @foreach ($ambientes as $a)
                                    <option value="{{ $a->id }}">{{ $a->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('ambiente_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="mb-3">
                            <label for="codigo" class="form-label">Código</label>
                            <input type="text" class="form-control" id="codigo" wire:model.defer="codigo"
                                placeholder="digite aqui...">
                        </div>
                        @error('codigo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição</label>
                            <input type="text" class="form-control" id="descricao" wire:model.defer="descricao"
                                placeholder="digite aqui...">
                        </div>
                        @error('descricao')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="mb-3">
                            <label for="tipo" class="form-label">Tipo</label>
                            <input type="text" class="form-control" id="tipo" wire:model.defer="tipo"
                                placeholder="digite aqui...">
                        </div>
                        @error('tipo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="status"
                                wire:model.defer="status">
                            <label class="form-check-label" for="status">Status do ambiente</label>
                        </div>
                        <a href="{{ route('sensor.list') }}"><input class="btn btn-danger mt-2" type="submit"
                                value="Cadastrar"></a>
                        <a href="{{ route('sensor.list') }}"><input class="btn btn-secondary mt-2" type="button"
                                value="Cancelar"></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
