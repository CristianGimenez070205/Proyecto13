@extends('front/layout')

@section('contenido')

<div class="container">
<div class="row">
    <div class="px-3 px-md-5 my-5">
    <h2 class="text-center mb-4">Galería de Cuadros</h2>

    <div class="row g-4">

      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <img src="img/catalogo/munich.jpg" class="card-img-top" alt="Cuadro">
          <div class="card-body text-center">
            <h5 class="card-title">Munich</h5>
            <p class="card-text">$120.000</p>
            <button class="btn btn-dark rounded-pill">Comprar</button>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <img src="img/catalogo/nocheestrellada.jpg" class="card-img-top">
          <div class="card-body text-center">
            <h5 class="card-title">Noche estrellada</h5>
            <p class="card-text">$150.000</p>
            <button class="btn btn-dark rounded-pill">Comprar</button>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <img src="img/catalogo/licenciado.jpg" class="card-img-top">
          <div class="card-body text-center">
            <h5 class="card-title">Retrato de joven</h5>
            <p class="card-text">$120.000</p>
            <button class="btn btn-dark rounded-pill">Comprar</button>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <img src="img/catalogo/paisaje.jpg" class="card-img-top">
          <div class="card-body text-center">
            <h5 class="card-title">El borde del mundo</h5>
            <p class="card-text">$160.000</p>
            <button class="btn btn-dark rounded-pill">Comprar</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <img src="img/catalogo/paisaje2.jpg" class="card-img-top">
          <div class="card-body text-center">
            <h5 class="card-title">Refugio distante</h5>
            <p class="card-text">$100.000</p>
            <button class="btn btn-dark rounded-pill">Comprar</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <img src="img/catalogo/reversion.jpg" class="card-img-top">
          <div class="card-body text-center">
            <h5 class="card-title">Reversion estrellada</h5>
            <p class="card-text">$300.000</p>
            <button class="btn btn-dark rounded-pill">Comprar</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <img src="img/catalogo/shark.jpg" class="card-img-top">
          <div class="card-body text-center">
            <h5 class="card-title">Pool shark</h5>
            <p class="card-text">$60.000</p>
            <button class="btn btn-dark rounded-pill">Comprar</button>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <img src="img/catalogo/taza.jpg" class="card-img-top">
          <div class="card-body text-center">
            <h5 class="card-title">Delicada pausa</h5>
            <p class="card-text">$90.000</p>
            <button class="btn btn-dark rounded-pill">Comprar</button>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <img src="img/catalogo/vangogh.jpg" class="card-img-top">
          <div class="card-body text-center">
            <h5 class="card-title">Autorretrato de vangogh</h5>
            <p class="card-text">$1200.000</p>
            <button class="btn btn-dark rounded-pill">Comprar</button>
          </div>
        </div>
      </div>

    </div>
</div>
</div>

<ul class="paginacion">
    <li><a href="{{ url('catalogo') }}" >1</a></li>
    <li><a href="{{ url('catalogo2') }}"  class="active" >2</a></li>
    <li><a href="#" >3</a></li>
    <li><a href="#" >4</a></li>
    <li><a href="#" >...</a></li>
    <li><a href="#" >10</a></li>

</ul>
</div>
@endsection