@extends('front.layout')

@section('contenido')
<div class= "container my-3 ">
<div class="card card-exito mb-4 shadow-sm">
    <div class="card-body">
        <h5 class="mb-3">
            <i class="bi bi-check-square-fill"></i> Confirmación de contacto
        </h5>

        <p class="lead mb-0">
            Hola <strong>{{ $nombre }}</strong>, gracias por ponerte en contacto con 
            <strong>Prisma Gallery</strong>. Hemos recibido tu consulta y uno de nuestros 
            asesores se comunicará con vos a la brevedad al correo 
            <strong>{{ $email }}</strong> para brindarte información sobre nuestras obras y servicios.
            <br><br>
            Agradecemos tu interés en el arte y en nuestra galería.
        </p>
    </div>
</div>
</div>
@endsection