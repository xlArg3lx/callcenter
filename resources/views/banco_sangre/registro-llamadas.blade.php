@extends('layouts.app')
<div class="container-fluid">
    <br><br><br>
    <div class="card-body">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h3 mb-0 text-gray-800">Registro llamadas banco de sangre</h2>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                data-whatever="@mdo"><i class="bi bi-plus-circle"></i> Nuevo registro</button>
        </div>

        @include('banco_sangre.modal-registro')

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <div class="row">
            @foreach ($agentes as $item)

                @if ($item->primer_nombre == 'Keyla' && $item->primer_apellido == 'Roca')
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            {{ $item->primer_nombre }} {{ $item->primer_apellido }}</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $agente }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-headset fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    @if ($item->primer_nombre == 'Paula' && $item->primer_apellido == 'Roca')
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                {{ $item->primer_nombre }} {{ $item->primer_apellido }}</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $agente_dos }}
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-headset fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        @if ($item->primer_nombre == 'Keren' && $item->primer_apellido == 'Bermudez')
                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    {{ $item->primer_nombre }} {{ $item->primer_apellido }}</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    {{ $agente_tres }}
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-headset fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($item->primer_nombre == 'Argenedis' && $item->primer_apellido == 'Álvarez')
                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    {{ $item->primer_nombre }} {{ $item->primer_apellido }}</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    {{ $agente_cuatro }}
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                        @endif
                    @endif
                @endif
            @endforeach
        </div>

        @include('banco_sangre.dashboard')

        <div class="table-responsive">
            <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Fecha registro</th>
                        <th>¿Paciente agendado?</th>
                        <th>Agente</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Fecha registro</th>
                        <th>¿Paciente agendado?</th>
                        <th>Agente</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($registros as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->fecha }}</td>
                            <td>{{ $item->agendado }}</td>
                            <td>{{ $item->agentes->primer_nombre }} {{ $item->agentes->primer_apellido }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('banco_sangre.floating_button')
