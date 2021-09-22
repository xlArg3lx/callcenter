<!-- Modal -->
@foreach ($casos as $item)
    <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/cerrar_caso/{{ $item->id }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <p>¿Seguro que deseas cerrar el caso #{{ $item->numero_orden }}?</p>


                        <div class="form-group">
                            <label for="seguimiento" class="col-form-label">Observaciones adicionales:</label>
                            <textarea class="form-control" name="seguimiento" id="seguimiento"></textarea>
                            <input name="seguimiento" type="text">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a type="submit" class="btn btn-danger">Cerrar caso</a>
                        <button type="submit"> JKHSKJDF</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
