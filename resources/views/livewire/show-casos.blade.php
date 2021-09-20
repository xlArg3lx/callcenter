<div>
    <div class="table-responsive">
        <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th># Órden</th>
                    <th>Paciente</th>
                    <th>Estado</th>
                    <th>Observaciones</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Fecha</th>
                    <th># Órden</th>
                    <th>Paciente</th>
                    <th>Estado</th>
                    <th>Observaciones</th>
                    <th>Acciones</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($casos as $item)
                    <tr>
                        <td>{{ $item->fecha }}</td>
                        <td>{{ $item->numero_orden }}</td>
                        <td>{{ $item->paciente }}</td>
                        <td>
                            @if ($item->estado == 'En proceso')
                                <span class="badge bg-warning text-dark">
                                    <div class="spinner-border spinner-border-sm" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    {{ $item->estado }}
                                </span>
                            @else
                                <span class="badge bg-warning text-dark">{{ $item->estado }}</span>
                            @endif
                        </td>
                        <td>{{ $item->observaciones }}</td>
                        <td>
                            <button type="button" class="btn btn-success">
                                <i class="bi bi-hand-thumbs-up"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
