@extends('front/layout')
@section('contenido')

  <div class="container py-3">
    <div class="registro-box mx-auto p-4 p-md-5">

      <h2 class="text-center mb-4">Crear cuenta</h2>

      <form action="/registrarse" method="post">
         @csrf
              <input type="text" name="nombre" class="campo" placeholder="Nombre...">
              <input type="text" name="apellido" class="campo" placeholder="Apellido...">
              <input type="text" name="usuario" class="campo" placeholder="Usuario...">
              <input type="email" name="email" class="campo" placeholder="Email...">
              <input type="password" name="contraseña" class="campo" placeholder="contraseña...">
              <input type="password" name="confirmacion" class="campo" placeholder="confirmar contraseña...">
          <button type="submit" class="btn-enviar">Enviar</button>
      </form>

    </div>
  </div>

nombre
apellido
usuario
email
contraseña

@endsection