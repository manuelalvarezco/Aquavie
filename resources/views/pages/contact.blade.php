@extends('layouts.app') 
@section('title','Contacto')
@section('content')
<div class="container mb-4" style="margin-top:100px">
    <h4 class="text-center">CONTÁCTANOS</h4>
    <div class="col-sm-12 col-md-8 offset-md-2">
        <p>¿Tiene alguna pregunta para nosotros? en AQUA VIE estamos pendientes para resolver cualquier duda o inquietud que tenga y ayudarte a tomar la mejor decisión.
            Nos encantaría darle una respuesta oportuna.</p>
    </div>
    
  <form class="col-sm-12 col-md-6 offset-md-3">
    <div class="form-group">
        <label for="name">Nombres</label>
        <input type="text" class="form-control" id="name" aria-describedby="Nombre" placeholder="Nombre completo">
    </div>
    <div class="form-group">
        <label for="email">Correo electrónico</label>
        <input type="email" class="form-control" id="email" aria-describedby="Correo electrónico" placeholder="Correo electrónico">
    </div>
    <div class="form-group">
        <label for="phone">Teléfono</label>
        <input type="text" class="form-control" id="phone" placeholder="Teléfono">
    </div>
    <div class="form-group">
        <label for="message">Mensaje</label>
        <textarea class="form-control" id="message" rows="3" placeholder="Mensaje"></textarea>
      </div>
    <div class="form-group">
        <a href="{{ url('/thanks') }}" class="btn btn-outline-primary btn-block">Enviar</a>
    </div>
</form>
</div>
@endsection