@extends('front/layout')
@section('contenido')

  <div class="container px-3 px-md-5">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">

      <div class="carousel-inner">

        <div class="carousel-item active">
          <img src="img/catalogo/nocheestrellada.jpg" class="d-block w-100" style="height: 500px; object-fit: cover;">
          <div class="carousel-caption">
            <h2>Clásicos que dan vida a tu espacio</h2>
          </div>
        </div>

        <div class="carousel-item">
          <img src="img/catalogo/carrousel1.png" class="d-block w-100" style="height: 500px; object-fit: cover;">
          <div class="carousel-caption">
            <h2>Descubre piezas únicas</h2>
          </div>
        </div>

        <div class="carousel-item">
          <img src="img/catalogo/granola.jpg" class="d-block w-100" style="height: 500px; object-fit: cover;">
          <div class="carousel-caption">
            <h2>Busca inspiración en la comodidad de tu hogar</h2>
          </div>
        </div>

      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>

    </div>
  </div>

  <section class="content-wrapper py-3">

    <div class="container text-center mb-5">
      <p class="lead intro-text">
        Una colección pensada para darle identidad a cada espacio.
        Obras seleccionadas con distintos estilos, técnicas y miradas.
      </p>
    </div>

    <div class="container mb-5">
      <h2 class="text-center mb-4 section-title">Explorar estilos</h2>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="principal-card">
            <h5>Arte clásico</h5>
            <p>Obras tradicionales que mantienen su valor con el tiempo.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="principal-card">
            <h5>Arte moderno</h5>
            <p>Composiciones actuales con enfoques innovadores.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="principal-card">
            <h5>Arte diferente</h5>
            <p>Lo cotidiano protagonizado por lo inesperado.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center text-center">

        <div class="col-md-6">
          <h3 class="mb-3 highlight-title">Cada obra tiene su lugar</h3>
          <p class="highlight-text">
            La selección está pensada para adaptarse a distintos espacios,
            desde ambientes modernos hasta clásicos.
          </p>

          <p class="mt-3">
            Podés recorrer el catálogo y encontrar la pieza que mejor encaje con tu espacio.
          </p>
        </div>

      </div>
    </div>

  </section>

  </div>
@endsection