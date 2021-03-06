<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">CALL CENTER</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Llamadas <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/casos">Casos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('banco_sangre') }}">Banco sangre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cierre_actividades') }}">Cierre actividades</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Deshabilitado</a>
            </li>
        </ul>
    </div>
</nav>
<br><br>
