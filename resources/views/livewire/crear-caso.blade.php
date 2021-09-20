<div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearCaso" data-whatever="@mdo"><i
            class="bi bi-plus-circle"></i> Crear nuevo caso</button>

    <div class="modal fade" id="crearCaso" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('Nuevo caso') }}</h5>
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
                            <label for="tipo_llamada" class="col-form-label">Número órden:</label>
                            <input required wire:model.defer="numero_orden" type="number" name="numero_orden"
                                class="form-control" id="numero_orden">
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="agente" class="col-form-label">Paciente:</label>
                            <input required wire:model.defer="paciente" type="text" name="paciente"
                                class="form-control" id="paciente">
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
                    <button wire:click="CrearCaso" type="button" class="btn btn-primary"><i
                            class="bi bi-folder-check"></i> Guardar
                        registro</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.addEventListener('close-modal-caso', event => {
        $('#crearCaso').modal('hide');
    })
</script>
