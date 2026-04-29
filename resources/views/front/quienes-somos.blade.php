@extends('front/layout')
@section('contenido')

  <div class="container my-4">

    <div class="card card-quienes-somos mb-3">
      <div class="card-body">
        <h5 class="card-title">Quiénes Somos</h5>
        <p class="card-text">Prisma Gallery es un emprendimiento digital dedicado a acercar obras únicas a personas
          que buscan identidad, estilo y personalidad en cada rincón de su entorno, buscamos ofrecer obras que no solo
          decoren, sino que inspiren.
          Porque el arte no es solo decoración, sino una forma de expresión que transforma espacios y genera emociones.
        </p>
      </div>
    </div>

    <div class="card card-mision mb-3">
      <div class="card-body">
        <h5 class="card-title">Nuestra Misión</h5>
        <p class="card-text">Conectar el arte con las personas, cambiar la concepción generalizada de que el arte
          es un lujo para unos pocos. Queremos hacer del arte algo accesible, sin perder autenticidad
          ni calidad, acercando piezas únicas que generen una conexión especial con quiénes así lo deseen.</p>
      </div>
    </div>

    <div class="card card-vision mb-3">
      <div class="card-body">
        <h5 class="card-title">Nuestra Visión</h5>
        <p class="card-text">Aspiramos a convertirnos en una referencia dentro del mundo del arte digital en el país,
          promoviendo el talento emergente y llevando el arte a nuevos espacios, tanto físicos como virtuales.</p>
      </div>
    </div>

    <div class="card card-equipo mb-3">
      <div class="card-body">
        <h5 class="card-title text-center mb-4">Nuestro Equipo</h5>

        <div class="row text-center">

          <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
              <img src="{{ asset('img/equipo/fundador.jpg') }}" class="card-img-top" alt="Integrante 1">
              <div class="card-body">
                <h6 class="card-title">Carlos Pizarro</h6>
                <p class="text-muted">Fundador</p>
                <p class="card-text">Apasionado por el arte y la creación de experiencias visuales únicas.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
              <img src="{{ asset('img/equipo/marketing.png') }}" class="card-img-top" alt="Integrante 2">
              <div class="card-body">
                <h6 class="card-title">Francisco Corrado</h6>
                <p class="text-muted">Marketing</p>
                <p class="card-text">Encargado de conectar Prisma Gallery con su comunidad y expandir su alcance.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
              <img src="{{ asset('img/equipo/desarrollador.png') }}" class="card-img-top" alt="Integrante 3">
              <div class="card-body">
                <h6 class="card-title">Miguel Rivas</h6>
                <p class="text-muted">Desarrollador</p>
                <p class="card-text">Responsable de la plataforma web y la experiencia del usuario.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>



@endsection