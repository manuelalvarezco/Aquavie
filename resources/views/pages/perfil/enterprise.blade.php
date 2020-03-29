@extends('layouts.app') 
@section('title','Contacto') 
@section('content')
<div class="container mb-4" style="margin-top:100px">
    <h4 class="text-center">FORMULARIO PERFIL EMPRESA</h4>
    
    <div>


        <form class="bg-white col-sm-12 col-md-6 offset-md-3">
            <div class="form-group">
                <label for="name">Nombres</label>
                <input type="text" class="form-control" id="name" aria-describedby="Nombre" placeholder="Nombre completo">
            </div>
            <div class="form-group">
                <label for="enterprise">Empresa</label>
                <input type="text" class="form-control" id="enterprise" aria-describedby="Nombre" placeholder="Nombre empresa">
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
                <label for="country">País</label>
                <input type="text" class="form-control" id="country" placeholder="Pais">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Impuesto Anual (TAX)</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Seleccione...</option>
                    <option value="1">0-50</option>
                    <option value="2">50 - 200 MILL</option>
                    <option value="3">MAS DE 200 MILL</option>
                </select>
              </div>

        

            
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Enviar</a>
            </div>
        </form>
    </div>
</div>
@endsection