<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home') }}">LaravelVue</a>


    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    CRUD
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ route('post.index') }}">Post</a></li>
                    <li><hr class="dropdown-divider"></li>          
                </ul>
            </li>
        </ul>

        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Logout</a>
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