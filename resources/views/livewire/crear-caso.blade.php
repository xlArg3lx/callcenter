<div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearCaso" data-whatever="@mdo"><i
            class="bi bi-plus-circle"></i> Crear nuevo caso</button>

    <div wire:ignore.self class="modal fade" id="crearCaso" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('Nuevo caso') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        @csrf
                        <div class="form-group">
                            <label for="fecha" class="col-form-label">Fecha:</label>
                            <input value="{{ $today }}" required readonly type="text" name="fecha"
                                class="form-control" id="fecha">
                        </div>
                        <div class="form-group">
                            <label for="tipo_llamada" class="col-form-label">Número órden:</label>
                            <input required wire:model.defer="numero_orden" type="number" name="numero_orden"
                                class="form-control" id="numero_orden">
                            </select>
                            @error('numero_orden')
                                <span style="color: red" class="text-red-500 text-xs italic">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="agente" class="col-form-label">Paciente:</label>
                            <input required wire:model.defer="paciente" type="text" name="paciente"
                                class="form-control" id="paciente" style="text-transform:uppercase;" value=""
                                onkeyup="javascript:this.value=this.value.toUpperCase();">
                        </div>
                        <div class="form-group">
                            <label for="observaciones" class="col-form-label">Observaciones:</label>
                            <textarea wire:model.defer="observaciones" class="form-control" name="observaciones"
                                id="observaciones" style="text-transform:uppercase;" value=""
                                onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Cerrar</button>
                    <button wire:click="CrearCaso" id="envio" type="button" class="btn btn-primary"><i
                            class="bi bi-folder-check"></i> Guardar
                        registro</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    let botonEnvio = document.getElementById('envio');
    let numero_orden = document.getElementById('numero_orden');
    let paciente = document.getElementById('paciente');
    let observaciones = document.getElementById('observaciones');

    botonEnvio.addEventListener('click', (event) => {
        event.preventDefault();

        if (observaciones.value === '') {
            observaciones.focus();
        }
        if (paciente.value === '') {
            paciente.focus();
        }
        if (numero_orden.value === '') {
            numero_orden.focus();
        }
    })

    window.addEventListener('close-modal-caso', event => {
        $('#crearCaso').modal('hide');
    })
</script>
