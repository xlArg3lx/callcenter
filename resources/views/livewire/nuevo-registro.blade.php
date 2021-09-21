<div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i
            class="bi bi-plus-circle"></i> Nuevo registro</button>

    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('Nuevo registro') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="fecha" class="col-form-label">Fecha:</label>
                            <input required wire:model.defer="fecha" type="date" name="fecha" class="form-control"
                                id="fecha">
                        </div>
                        <div class="form-group">
                            <label for="tipo_llamada" class="col-form-label">Tipo llamada:</label>
                            <select wire:model.defer="tipo_llamada" id="inputState" class="form-control">
                                <option selected> Seleccione</option>
                                @foreach ($tipos_llamadas as $item)
                                    <option value="{{ $item->tipo_llamada }}">{{ $item->tipo_llamada }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="agente" class="col-form-label">Agente:</label>
                            <select wire:model.defer="agente" id="inputState" class="form-control">
                                <option selected> Seleccione</option>
                                @foreach ($agentes as $item)
                                    <option value="{{ $item->primer_nombre }} {{ $item->primer_apellido }}">
                                        {{ $item->primer_nombre }} {{ $item->primer_apellido }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="observaciones" class="col-form-label">Observaciones:</label>
                            <textarea wire:model.defer="observaciones" class="form-control" name="observaciones"
                                id="observaciones"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Cerrar</button>
                    <button wire:click="NuevoRegistro" type="button" class="btn btn-primary"><i
                            class="bi bi-folder-check"></i> Guardar
                        registro</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.addEventListener('close-modal-registro', event => {
        $('#exampleModal').modal('hide');
    })
</script>
