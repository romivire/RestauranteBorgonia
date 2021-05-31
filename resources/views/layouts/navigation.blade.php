         
<nav class="navbar navbar-expand-md navbar-light shadow-sm navbar-custom">
    <div class="container-fluid">                
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">La Borgonia</a>
                </li>
            </ul>
                            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                @hasanyrole('editor|admin')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('platos.adminIndex') }}">Nuestra carta</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('reservas.index') }}">Reservas</a>             
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('restaurantes.index') }}" id="navbarDarkDropdownMenuLink" aria-expanded="false" role="button">Contacto</a>
                    @role('admin')
                        <div class="dropdown-content">
                                <a href="/restaurantes/1/edit">Editar datos</a>
                        </div>
                    @endrole
                </li>
                @endhasanyrole
                @if (Route::has('login'))
                    @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Log Out</a>
                        </li>
                     </form>
                @else
                    <a class="nav-link" href="{{ route('login') }}">Ingresar</a>
                @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>