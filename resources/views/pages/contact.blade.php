@extends('layouts.app') 
@section('title','Contacto') 
@section('content')
<div class="container mb-4" style="margin-top:100px">
    <h4 class="text-center">CONTÁCTANOS</h4>
    <div class="col-sm-12 col-md-8 offset-md-2">
        <p>¿Tiene alguna pregunta para nosotros? en AQUA VIE estamos pendientes para resolver cualquier duda o inquietud que tenga y ayudarte a tomar la mejor decisión. Nos encantaría darle una respuesta oportuna.</p>
    </div>
    <div>


        <form class="card bg-white col-sm-12 col-md-6 offset-md-3">
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
                <a href="{{ url('/thanks') }}" class="btn btn-primary btn-block">Enviar</a>
            </div>
        </form>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-1">
                <div class="text-center">
                    <span class="text-primary">
                        <i class="fab fa-whatsapp fa-3x"></i>
                    </span>
                <h2 class="mt-4">ESCRÍBENOS</h2>
                </div>
                <P>Estamos disponibles por WhatsApp para responder cualquier inquietud que puedas tener acerca de AQUA VIE</P>
                <div class="text-center">
                    <a href="https://api.whatsapp.com/send?phone=573007109449&text=Hola,%20Quiero%20mas%20informaci%C3%B3n%20acerca%20de%20Aqua%20vie%20y%20como%20adquirirla" class="btn btn-primary">
                        <i class="fab fa-whatsapp"></i> Escribe ya
                    </a>
                </div>
            </div>
            <div class="col-md-4 offset-2">
                <div class="text-center">
                    <span class="text-primary">
                        <i class="fas fa-envelope fa-3x"></i>
                    </span>
                <h2 class="mt-4">EMAIL</h2>
                </div>
                <P>Si prefieres puedes escribirnos un correo electrónico a nuestro email y con gusto te ayudaremos.</P>
                <div class="text-center">
                    <h4 class="text-primary">servicioalcliente@aquaviecorporation.com</h4>                    
                </div>
            </div>
        </div>    
    </div>
</div>
@endsection