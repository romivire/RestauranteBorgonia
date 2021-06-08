
<nav class="navbar navbar-expand-lg navbar-light shadow-sm navbar-custom">
    <div class="container-fluid">    
        <a class="navbar-brand" href="{{ url('/') }}">La Borgonia</a>            
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <!-- Left Side Of Navbar -->
                            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav">
                @hasanyrole('editor|admin')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('platos.adminIndex') }}">Nuestra carta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('reservas.index') }}">Reservas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('restaurantes.index') }}">Contacto</a>
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