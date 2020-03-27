<header class="header">
<nav class="nav navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
        <img class="navbar-image" src="{{url('images/logo.png')}}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="color-white nav-link" href="{{ url('/') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-link text-white nav-link dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            MÁS INFORMACION
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <button class="dropdown-item" type="button">QUIENES SOMOS</button>
                          <button class="dropdown-item" type="button">PERFIL NATURAL</button>
                          <button class="dropdown-item" type="button">PERFIL EMPRESARIAL</button>
                          <button class="dropdown-item" type="button">FORMULARIO</button>
                        </div>
                      </div>
                </li>
                <li class="nav-item">
                    <a class="color-white nav-link" href="{{ url('/') }}">DONAR</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-link text-white nav-link dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            PROGRAMAS SOCIALES
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <button class="dropdown-item" type="button">DEPORTE</button>
                          <button class="dropdown-item" type="button">SIEMBRA</button>
                          <button class="dropdown-item" type="button">EDUCACIÓN </button>
                          <button class="dropdown-item" type="button">ADULTO MAYOR</button>
                          <button class="dropdown-item" type="button">ANIMALES </button>
                          <button class="dropdown-item" type="button">APOYO PSICOSOCIAL </button>
                          <button class="dropdown-item" type="button">ARTES LÚDICAS </button>
                          <button class="dropdown-item" type="button">EMPRENDIMIENTO  </button>
                        </div>
                      </div>
                </li>
                <li class="nav-item">
                    <a class="color-white nav-link" href="{{ url('paw') }}">CALCULAR</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-link text-white nav-link dropdown-toggle"  id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SIEMBRA CON NOSOTROS 
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <button class="dropdown-item" type="button">ÁRBOLES SEMBRADOS</button>
                          <button class="dropdown-item" type="button">INSCRIBIRSE</button>
                        </div>
                      </div>
                </li>
                <li class="nav-item">
                    <a class="color-white nav-link" href="{{ url('contact') }}">CONTACTO</a>
                </li>
               
                
                <!-- Authentication Links 
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                    -->

            </ul>
        </div>
    </div>
</nav>
</header>