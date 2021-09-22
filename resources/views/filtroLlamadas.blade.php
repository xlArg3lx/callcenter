<div class="modal fade" id="Filtrarllamadas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filtro llamadas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fecha:</label>
                        <input wire:model.defer="fecha_filtro" type="date" class="form-control" id="fecha_filtro">
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
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button wire:click="filtroLlamadas" type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
</div>

<script>
    window.addEventListener('close-modal-filter', event => {
        $('#Filtrarllamadas').modal('hide');
    })
</script>
