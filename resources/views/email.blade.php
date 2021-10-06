<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Envío correo</title>
</head>

<body>
    <p>Buenas tardes! El día {{ $today }} del presente año me permito enviar cierre de actividad realizada</p>
    <p>Estos son los datos reportados por todos los agentes del CallCenter:</p>
    <ul>
        <li>Llamadas contestadas: {{ $Llamadasreyfals }}</li>
        <li>Llamadas realizadas a donantes: {{ $Llamadasbanco }}</li>
        <li>Donantes agendados: {{ $agendado }}</li>
        <li>Total chats: {{ $total_chats }}</li>
        <li>Total paciente atendidos WhatsApp: {{ $total_patient }}</li>
    </ul>
    <p>Información adicional:</p>
    <ul>
        <li>Domicilios: {{ $domicilios }}</li>
        <li>Comentarios adicionales: {{ $comentarios }}</li>
    </ul>
</body>

</html>
