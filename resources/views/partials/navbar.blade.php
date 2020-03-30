
<header class="header">
    <!-- Just an image -->
    <nav class="nav navbar navbar-expand-lg navbar-light bg-light">
      <a style="padding-top:0" class="ml-auto navbar-image navbar-brand" href="#">
        <img src="{{route('images/logo-franja.png')}}"  height="130" class="d-inline-block align-top" alt="">
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
                <a class="color-white nav-link" href="{{ route('/') }}">INICIO</a>
            </li>
            <li class="nav-item">
                <a class="color-white nav-link" href="{{ route('about') }}">QUIENES SOMOS</a>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <a class="nav-link text-white nav-link dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        PROGRAMAS SOCIALES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                      <a href="{{route('deport')}}" class="dropdown-item" type="button">DEPORTE</a>
                      <a href="{{route('sowing')}}" class="dropdown-item" type="button">SIEMBRA</a>
                      <a href="{{route('education')}}" class="dropdown-item" type="button">EDUCACIÓN </a>
                      <a href="{{route('adult')}}" class="dropdown-item" type="button">ADULTO MAYOR</a>
                      <a href="{{route('animals')}}" class="dropdown-item" type="button">ANIMALES </a>
                      <a href="{{route('support')}}" class="dropdown-item" type="button">APOYO PSICOSOCIAL </a>
                      <a href="{{route('entrepreneurship')}}" class="dropdown-item" type="button">EMPRENDIMIENTO  </a>
                      <a href="{{route('ceiling')}}" class="dropdown-item" type="button">TECHO PARA TODOS  </a>
                      <a href="{{route('prevention')}}" class="dropdown-item" type="button">PREVENCIÓN </a>
                    </div>
                  </div>
            </li>
            <li class="nav-item">
                <a class="color-white nav-link" href="{{ route('paw') }}">CALCULAR</a>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <a class="nav-link text-white nav-link dropdown-toggle"  id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        SIEMBRA CON NOSOTROS 
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                      <button class="dropdown-item" type="button">ÁRBOLES SEMBRADOS</button>
                      <a href="{{ route('form/register') }}" class="dropdown-item" type="button">INSCRIBIRSE</a>
                    </div>
                  </div>
            </li>
            <li class="nav-item">
                <a class="color-white nav-link" href="{{ route('contact') }}">CONTACTO</a>
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
      </nav>
    </header>