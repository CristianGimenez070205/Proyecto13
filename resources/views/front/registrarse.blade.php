@extends('front/layout')
@section('contenido')

  <div class="container py-3">
    <div class="registro-box mx-auto p-4 p-md-5">

      <h2 class="text-center mb-4">Crear cuenta</h2>

      <form>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" placeholder="Tu nombre">
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">Apellido</label>
            <input type="text" class="form-control" placeholder="Tu apellido">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Nombre de usuario</label>
          <input type="text" class="form-control" placeholder="usuario">
        </div>

        <div class="mb-3">
          <label class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" placeholder="ejemplo@mail.com">
        </div>

        <div class="mb-3">
          <label class="form-label">Contraseña</label>
          <input type="password" class="form-control" placeholder="••••••••">
        </div>

        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="terminos">
          <label class="form-check-label" for="terminos">
            Acepto los <a href="{{ url('terminos-y-uso') }}">Términos y Condiciones</a>
          </label>
        </div>

        <button type="submit" class="btn btn-dark w-100 rounded-pill">
          Registrarse
        </button>

      </form>

    </div>
  </div>


@endsection