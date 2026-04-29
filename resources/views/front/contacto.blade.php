@extends('front/layout')
@section('contenido')

<div class="contenedor-formulario">
<div class="contenedor-info">
<h2>Contacto</h2>
<p>Si tenés alguna consulta, duda o necesitás asesoramiento,
   estamos para ayudarte. Completá el formulario con tus datos y tu mensaje,
   y nos pondremos en contacto con vos a la brevedad.
   También podés comunicarte a través de nuestros canales disponibles..</p>
<a href="#"><i class="bi bi-telephone-fill"></i>+54 123-456-789</a>
<a href="#"><i class="bi bi-envelope-fill"></i>prismagalery@gmail.com</a>
<a href="#"><i class="bi bi-map-fill"></i>Corrientes,corrientes</a>
</div>
<form action="/contacto" method="post">
    @csrf
      <input type="text" name="nombre" class="campo" placeholder="Nombre...">
      <input type="text" name="telefono" class="campo" placeholder="Telefono...">
      <input type="email" name="email" class="campo" placeholder="Email...">
      <textarea name="mensaje" class="campo" placeholder="Consulta..."></textarea>
    <button type="submit" class="btn-enviar">Enviar</button>
</form>
</div>
@endsection