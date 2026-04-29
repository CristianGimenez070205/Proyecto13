<nav class="navbar navbar-expand-lg navbar-light sticky-top shadow-sm px-4 py-3">
  <div class="container-fluid">

    <a class="navbar-brand fw-bold d-flex align-items-center" href="{{ url('/') }}">
      <img src="{{ asset('img/recursos/logo.png') }}" class="navbar-logo me-2">

    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContenido">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContenido">

      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/') }}">Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('catalogo') }}">Catálogo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('quienes-somos') }}">Quiénes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('comercializacion') }}">Comercialización</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('contacto') }}">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('terminos-y-uso') }}">Términos y usos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            Cuenta</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ url('registrarse') }}">Registrarse</a></li>
            <li><a class="dropdown-item" href="{{ url('ingresar') }}">Iniciar Sesión</a></li>
          </ul>
        </li>
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2 rounded-pill" type="search" placeholder="Buscar cuadros...">
        <button class="btn btn-outline-dark rounded-pill" type="submit">Buscar</button>
      </form>

    </div>
  </div>
</nav>