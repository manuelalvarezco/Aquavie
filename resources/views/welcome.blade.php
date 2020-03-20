@extends('layouts.app')
@section('content')
    <div class="main">
        <div class="container" style="margin-top:5.5em">

            <div class="row phrase mb-4">
                <div class="col-sm-12 col-md-4 info">
                    <h4 style="text-transform: upercase" >En la corporación Aqua Vie te ayudamos a optimizar tus impuestos por medio de la siembra de árboles</h4>
                <a href="{{url('/info')}}" class="mt-4 btn btn-primary btn-block">MAS INFORMACION</a>
                </div>
                <form class="col-sm-12 col-md-4 offset-md-4">
                    <h4 class="text-center">Escríbenos!</h4>
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
                        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                      </div>
                  </form>
            </div>
            <div class="small-banner" style="margin-top: 50px"></div>
            <div class="row aliados d-flex align-items-center"> 
                <div class="col-md-4">
                <img width="250" src="{{url('images/aliado01.png')}}" alt="aliado">
            </div>
            <div class="col-md-4">
                <img width="250" src="{{url('images/aliado02.png')}}" alt="aliado">
            </div>
            <div class="col-md-4"> 
                <img width="250" src="{{url('images/aliado03.png')}}" alt="aliado">
                </div>
            </div>
        </div>
    </div>
@endsection