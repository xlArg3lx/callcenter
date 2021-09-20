@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card-body">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Gestión casos Rey Fals</h1>
                <livewire:crear-caso />
            </div>
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            <livewire:show-casos />
        </div>
    </div>
@endsection
