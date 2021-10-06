@extends('layouts.app')

{{-- <h2>Formulario de contacto</h2>
<form action={{ route('contact') }} method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Nombre</label>
        <input name="name" type="text">
    </div>
    <div class="form-group">
        <label for="name">Mensaje</label>
        <input name="msg" type="text">
    </div>
    <div class="form-group">
        <button type="submit" id='btn-contact' class="btn">Enviar</button>
    </div>
</form> --}}
<br><br><br><br>
<form action={{ route('contact') }} method="POST">
    {{ csrf_field() }}
    @method('POST')

    <div class="container-sm">
        <div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                    </divs>
            @endif
        </div>
        <h3>Cierre diario de actividades</h3>
        <input type="text" name="today" readonly hidden value="{{ $today }}">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Llamadas contestadas {{ $today }}</label>
            <input type="text" value="{{ $call_today_count_rf }}" readonly name="Llamadasreyfals"
                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Llamadas realizadas a donantes
                {{ $today }}</label>
            <input type="text" value="{{ $call_today_count }}" readonly name="Llamadasbanco" class="form-control"
                id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Total donantes agendados
                {{ $today }}</label>
            <input type="text" value="{{ $agendado }}" readonly name="agendado" class="form-control"
                id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Chats WhatsApp
                {{ $today }}</label>
            <input type="text" name="total_chats" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Total pacientes WhatsApp
                {{ $today }}</label>
            <input type="text" name="total_patient" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Domicilios agendados
                {{ $today }}</label>
            <input type="text" name="domicilios" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Comentarios adicionales</label>
            <textarea name="comentarios" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
