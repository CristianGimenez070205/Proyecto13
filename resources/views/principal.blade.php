@extends('layout')
@section('contenido')
  <div class="px-3 px-md-5">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">

      <div class="carousel-inner">

        <div class="carousel-item active">
          <img src="img/Carrousel1.png" class="d-block w-100" style="height: 500px; object-fit: cover;">
          <div class="carousel-caption">
            <h2>Arte que transforma espacios</h2>
            <p>Descubre piezas únicas</p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="img/Carrousel1.png" class="d-block w-100" style="height: 500px; object-fit: cover;">
          <div class="carousel-caption">
            <h2>Estilo moderno</h2>
          </div>
        </div>

        <div class="carousel-item">
          <img src="img/Carrousel1.png" class="d-block w-100" style="height: 500px; object-fit: cover;">
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

  <div class="px-3 px-md-5 my-5">
    <h2 class="text-center mb-4">Galería de Cuadros</h2>

    <div class="row g-4">

      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <img src="img/Carrousel1.png" class="card-img-top" alt="Cuadro">
          <div class="card-body text-center">
            <h5 class="card-title">Amanecer Urbano</h5>
            <p class="card-text">$120.000</p>
            <button class="btn btn-dark rounded-pill">Ver más</button>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <img src="img/Carrousel1.png" class="card-img-top">
          <div class="card-body text-center">
            <h5 class="card-title">Explosión Floral</h5>
            <p class="card-text">$150.000</p>
            <button class="btn btn-dark rounded-pill">Ver más</button>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <img src="img/Carrousel1.png" class="card-img-top">
          <div class="card-body text-center">
            <h5 class="card-title">Paisaje Tranquilo</h5>
            <p class="card-text">$100.000</p>
            <button class="btn btn-dark rounded-pill">Ver más</button>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <img src="img/Carrousel1.png" class="card-img-top">
          <div class="card-body text-center">
            <h5 class="card-title">Paisaje Tranquilo</h5>
            <p class="card-text">$100.000</p>
            <button class="btn btn-dark rounded-pill">Ver más</button>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <img src="img/Carrousel1.png" class="card-img-top">
          <div class="card-body text-center">
            <h5 class="card-title">Paisaje Tranquilo</h5>
            <p class="card-text">$100.000</p>
            <button class="btn btn-dark rounded-pill">Ver más</button>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <img src="img/Carrousel1.png" class="card-img-top">
          <div class="card-body text-center">
            <h5 class="card-title">Paisaje Tranquilo</h5>
            <p class="card-text">$100.000</p>
            <button class="btn btn-dark rounded-pill">Ver más</button>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection