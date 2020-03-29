    @extends('layouts.app')
    @section('content')

        <div class="main mt-5">
            <div class="container" style="margin-top:5.5em">

                <div class="row mb-4">
                    <div class="col-sm-12 col-md-6 info">
                        <h1 style="text-transform: uppercase; color: white">En la corporación Aqua Vie te ayudamos a optimizar tus impuestos por medio de la siembra de árboles</h1>
                        <a href="/contact" class=" btn btn-outline-warning" data-original-title="" title="">QUIERO MÁS INFORMACIÓN</a>    
                    </div>
                    
                </div>
                
            </div>
        </div>
        
       

        <div class="sociales">
            <div class="container mt-4">
                <h2 class="font-primary text-center text-uppercase">Programas Sociales</h2>
                <div class="carrousel">
                    <div class="carrousel__container">
                        <a href="{{url('adult')}}">
                            <div class="carrousel-item">
                                <img class="carrousel-item__img" src="{{url('images/adultomayor.png')}}" alt="adultomayor">
                                <div class="carrousel-item__details">
                                    
                                    <p class="carrousel-item__details--title">Adulto Mayor</p>
                                </div>
                            </div>
                        </a>
                        <a href="{{url('animals')}}">
                            <div class="carrousel-item">
                                <img class="carrousel-item__img" src="{{url('images/animales.png')}}" alt="animales">
                                <div class="carrousel-item__details">
                                    
                                    <p class="carrousel-item__details--title">Animales </p>
                                </div>
                            </div>
                        </a>
                        <a href="{{url('support')}}">
                            <div class="carrousel-item">
                                <img class="carrousel-item__img" src="{{url('images/apoyopsicosocial.png')}}" alt="apoyopsicosocial">
                                <div class="carrousel-item__details">
                                    
                                    <p class="carrousel-item__details--title">Apoyo Psicosocial</p>
                                </div>
                            </div>
                        </a>
                        <a href="{{url('entrepreneurship')}}">
                            <div class="carrousel-item">
                                <img class="carrousel-item__img" src="{{url('images/emprendimiento.png')}}" alt="emprensimiento">
                                <div class="carrousel-item__details">
                                    
                                    <p class="carrousel-item__details--title">Emprendimiento</p>
                                </div>
                            </div>
                        </a>
                        <a href="{{url('cleaning')}}">
                            <div class="carrousel-item">
                                <img class="carrousel-item__img" src="{{url('images/limpieza.png')}}" alt="limpieza">
                                <div class="carrousel-item__details">
                                    
                                    <p class="carrousel-item__details--title">Limpieza </p>
                                </div>
                            </div>
                        </a>
                        <a href="{{url('prevention')}}">
                            <div class="carrousel-item">
                                <img class="carrousel-item__img" src="{{url('images/prevencion.png')}}" alt="prevención">
                                <div class="carrousel-item__details">
                                    
                                    <p class="carrousel-item__details--title">Prevención</p>
                                </div>
                            </div>
                        </a>
                        <a href="{{url('sowing')}}">
                            <div class="carrousel-item">
                                <img class="carrousel-item__img" src="{{url('images/siembra.png')}}" alt="siembra">
                                <div class="carrousel-item__details">
                                    
                                    <p class="carrousel-item__details--title"> Siembra</p>
                                </div>
                            </div>
                        </a>
                        <a href="{{url('ceiling')}}">
                            <div class="carrousel-item">
                                <img class="carrousel-item__img" src="{{url('images/techo.png')}}" alt="techo">
                                <div class="carrousel-item__details">
                                    
                                    <p class="carrousel-item__details--title">Techo</p>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
    
            </div>
        </div>


        <div class="container mt-4">
            <div class="row prueba-2">
                <div class="col-md-7">
                    <div class="home-program-intro">
                        <h2>Siembra con nosotros</h2>
                        <h3>Lorem inpsup</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa veritatis eveniet, illo quae expedita nam consectetur et eius, recusandae reprehenderit eligendi dolore reiciendis accusantium, harum ipsum ratione aut! Tenetur, ex.</p>
                        </div>
                    <!-- .home-program-intro -->
                </div>
                <div class=" prueba col-md-5" style="background-image: url(/images/siembranosotrosnew.png);">
                    <div class="home-program-links">
                    <a href="{{url('sowing')}}"><span>Más información</span></a>
                    </div>
                    <!-- .home-program-links -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row prueba-2">
                <div class=" prueba col-md-5" style="background-image: url(/images/calculahuellanew.png);">
                    <div class="home-program-links">
                        <a href="{{url('paw')}}"><span>Más información</span></a>
                    </div>
                    <!-- .home-program-links -->
                </div>
                <div class="col-md-7">
                    <div class="home-program-intro">
                        <h2>Calcula tu huella</h2>
                        <h3>Lorem inpsup</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa veritatis eveniet, illo quae expedita nam consectetur et eius, recusandae reprehenderit eligendi dolore reiciendis accusantium, harum ipsum ratione aut! Tenetur, ex.</p>
                        </div>
                    <!-- .home-program-intro -->
                </div>
                
            </div>
        </div>

        

        <div class="container">
            <div class="row prueba-2">
                <div class="col-md-7">
                    <div class="home-program-intro">
                        <h2>Contáctanos</h2>
                        <h3>Nuestros clientes quieren ayudar a impactar y generar un cambio</h3>
                        <p>¿Tienes alguna pregunta para nosotros? en AQUA VIE estamos pendientes para resolver cualquier duda o inquietud que tenga y ayudarte a tomar la mejor decisión.
                            Nos encantaría darle una respuesta oportuna.</p>
                    </div>
                    <!-- .home-program-intro -->
                </div>
                <div class="prueba col-md-5" style="background-image: url(/images/contactanosnew.png);">
                    <div class="home-program-links">
                        <a href="{{url('contact')}}"><span>Escríbenos para mas información</span></a>
                    </div>
                    <!-- .home-program-links -->
                </div>
            </div>
        </div>

        <div class="aliados mt-4 mb-5">
            <div class="container ">
                <div class="row d-flex align-items-center"> 
                    <div class="col-md-4">
                    <img width="250" src="{{url('images/aliado001.png')}}" alt="aliado">
                </div>
                <div class="col-md-4">
                    <img width="250" src="{{url('images/aliado002.png')}}" alt="aliado">
                </div>
                <div class="col-md-4"> 
                    <img width="250" src="{{url('images/aliado003.png')}}" alt="aliado">
                    </div>
                </div>
            </div>

        </div>


    @endsection