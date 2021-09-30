<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('Nuevo registro') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('guardar_registro_banco') }}">
                    @method('POST')
                    @csrf
                    <div class="form-group">
                        <label for="fecha" class="col-form-label">Fecha:</label>
                        <input readonly type="text" value="{{ $today }}" name="fecha" class="form-control"
                            id="fecha">
                    </div>
                    <div class="form-group">
                        <label for="tipo_llamada" class="col-form-label">¿Donante fue agendado si o no?</label>
                        <select name="agendado" id="inputState" class="form-control">
                            <option value="">Seleccione...</option>
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tipo_llamada" class="col-form-label">Agente:</label>
                        <select name="agente_id" id="inputState" class="form-control">
                            <option value="">Seleccione...</option>
                            @foreach ($agentes as $item)
                                <option value="{{ $item->id }}">{{ $item->primer_nombre }}
                                    {{ $item->primer_apellido }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Cerrar</button>
                        <button type="submit" class="btn btn-primary"><i class="bi bi-folder-check"></i> Guardar
                            registro</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
