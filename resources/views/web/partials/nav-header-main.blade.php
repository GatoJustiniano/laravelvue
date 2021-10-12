<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
    <router-link class="navbar-brand" to="/">LaravelVue</router-link>


    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <router-link to="/" class="nav-link text-white" >Home</router-link>
            </li>
            <li class="nav-item dropdown">
                <router-link to="/categories" class="nav-link text-white" >Categorías</router-link>
            </li>
        </ul>

        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Perfil
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                    <li><a class="dropdown-item" href="">Perfil</a></li>
                    <li><a class="dropdown-item" href="#">Listado</a></li>
                </ul>
            </li>
        </ul>

    </div>
</div>
</nav>