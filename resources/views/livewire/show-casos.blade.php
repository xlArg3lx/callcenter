<div>
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @include('modal_confirm')
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
                                <span class="badge bg-success text-dark">{{ $item->estado }}</span>
                            @endif
                        </td>
                        <td>{{ $item->observaciones }}</td>
                        <td>
                            <a title="Editar" data-toggle="modal" data-target="#exampleModal{{ $item->id }}"
                                class=" btn btn-success waves-effect waves-light"> <i class="bi bi-hand-thumbs-up">
                                </i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
