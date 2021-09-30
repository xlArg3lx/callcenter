<div>
    <div class="table-responsive">
        <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Tipo llamada</th>
                    <th>Agente</th>
                    <th>Observaciones</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Fecha</th>
                    <th>Tipo llamada</th>
                    <th>Agente</th>
                    <th>Observaciones</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($llamadas as $item)
                    <tr>
                        <td>{{ $item->fecha }}</td>
                        <td>
                            @if ($item->tipo_llamada == 'Cotización')
                                <span class="badge badge-primary">{{ $item->tipo_llamada }}</span>
                            @else
                                @if ($item->tipo_llamada == 'Domicilio')
                                    <span class="badge badge-success">{{ $item->tipo_llamada }}</span>
                                @else
                                    @if ($item->tipo_llamada == 'Resultados')
                                        <span class="badge badge-info">{{ $item->tipo_llamada }}</span>
                                    @else
                                        @if ($item->tipo_llamada == 'Pin - Órden')
                                            <span class="badge badge-warning">{{ $item->tipo_llamada }}</span>
                                        @else
                                            @if ($item->tipo_llamada == 'Otro')
                                                <span class="badge badge-secondary">{{ $item->tipo_llamada }}</span>
                                            @else
                                                @if ($item->tipo_llamada == 'Donante')
                                                    <span class="badge badge-danger">{{ $item->tipo_llamada . ' ' }} <i
                                                            class="fas fa-tint"></i></span>
                                                @endif
                                            @endif
                                        @endif
                                    @endif
                                @endif
                            @endif
                        </td>
                        <td>{{ $item->agente }}</td>
                        <td>{{ $item->observaciones }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
