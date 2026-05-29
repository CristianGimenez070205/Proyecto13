@extends('front/layout')
@section('contenido')

<div class="registro-bg py-3">
  <div class="container">
    <div class="registro-box mx-auto p-4 p-md-5">

      <h2 class="text-center mb-4">Iniciar Sesión</h2>

      <form>

        <div class="mb-3">
          <label class="form-label">Usuario o correo</label>
          <input type="text" class="form-control" placeholder="usuario o email">
        </div>

        <div class="mb-3">
          <label class="form-label">Contraseña</label>
          <input type="password" class="form-control" placeholder="••••••••">
        </div>

        <div class="d-flex justify-content-between mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="recordar">
            <label class="form-check-label" for="recordar">
              Recordarme
            </label>
          </div>

          <a href="#" class="text-decoration-none">¿Olvidaste tu contraseña?</a>
        </div>

        <button type="submit" class="btn btn-dark w-100 rounded-pill">
          Ingresar
        </button>

      </form>

    </div>
  </div>
</div>

@endsection