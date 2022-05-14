@extends('layouts.master')
@section('title', 'Bienvenido')

@section('content')

<div class="container-xxl">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">{{env('APP_NAME')}}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-ex-7">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-ex-7">
                <div class="navbar-nav me-auto">
                    <a class="nav-item nav-link" href="#about">Acerca de nosotros</a>
                </div>
                <ul class="navbar-nav ms-lg-auto">
                    <li class="nav-item me-2 me-xl-0">
                        <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                            <i class='bx bx-sm'></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <i class="tf-icons navbar-icon bx bx-user"></i>
                            Iniciar Sesión
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">
                            <i class="tf-icons navbar-icon bx bx-user-plus"></i>
                            Registrarse
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container mb-3 mt-3">

        <section class="row">
            <div class="col-7">
                <h1 class="">Bienvenido a {{env('APP_NAME')}}! </h1>
                <p class=""> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut ex quam. Fusce sit amet
                    ultrices neque. Suspendisse vehicula dictum ullamcorper. Aliquam sodales fermentum massa in
                    vehicula. Suspendisse eu ultrices nisi. Sed pretium nunc at fermentum rhoncus. Integer erat nisi,
                    finibus ut ipsum et, ultrices auctor metus. Ut lobortis dignissim nisl sed pharetra. Donec magna
                    sapien, porttitor sit amet mattis ut, porta nec sem. Pellentesque tincidunt, justo ac euismod
                    placerat, eros lectus euismod odio, et interdum nunc enim nec magna. Morbi posuere eros ut enim
                    laoreet, non malesuada ex pulvinar. Nam enim velit, convallis et dui et, tincidunt ultrices augue.
                    Pellentesque tincidunt vestibulum risus. .
                    <!-- -->&nbsp;
                </p>
                <div class=" ">
                    <a data-link-as-button="true" class="" href="{{ route('register') }}" type="button">Regístrate
                        gratis
                    </a>
                </div>
            </div>
            <div class="col-5">
                <img alt="Creador de diagramas de flujo"
                    src="https://d2slcw3kip6qmk.cloudfront.net/marketing/pages/chart/consideration-2020/hero-image-rebrand/flowchart-maker-hero-image-2020@2x.png"
                    class="img-thumbnail" width="60%">
            </div>
        </section>

        <br>

        <section class="">
            <h2 class="card-title">Qué puedes hacer?</h2>
            <ul class="">
                <li class="card">
                    <div class="card-body">
                        <h3 class="card-title">Todo profesional.</h3>
                        <div class="card-text">
                            <p> Nam tincidunt massa vel sapien elementum, eget sagittis nibh commodo. Etiam sagittis
                                nunc a metus feugiat, a tempor nisi fringilla. Duis venenatis ligula non enim tincidunt
                                commodo. Mauris libero massa, semper a ultricies a, facilisis vel ipsum. Quisque
                                consectetur libero vel diam malesuada, non ultricies diam consequat. Morbi vel odio
                                iaculis nulla blandit pulvinar vitae vel quam. Ut lectus nisl, elementum ut orci sed,
                                euismod varius urna. Praesent lacus dolor, vestibulum ut felis eget, accumsan
                                condimentum magna. .
                            </p>
                        </div>
                    </div>
                </li>
                <li class="card mt-3">
                    <div class="card-body">
                        <h3 class="card-title">Colabora en cualquier momento y en cualquier lugar</h3>
                        <div class="card-text">
                            <p> Duis in velit metus. Aenean sollicitudin lorem sed tristique vestibulum. Vivamus lacinia
                                arcu augue, sed ultrices ligula gravida eu. Aliquam erat volutpat. Maecenas vitae ex id
                                felis hendrerit venenatis at sit amet ante. Nullam tempus congue tortor, id semper lorem
                                aliquam ac. Quisque ornare lectus dolor, eu posuere lectus tincidunt quis. Cras sodales
                                id quam vestibulum eleifend. Nulla nec odio tincidunt, rutrum velit vel, tincidunt diam.
                                Nullam efficitur molestie dolor et consectetur. Suspendisse rhoncus sagittis enim, eget
                                fermentum ligula laoreet a. Nam tincidunt lectus quis enim aliquam tempor. Donec rutrum
                                felis quis tempor pharetra.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="card mt-3">
                    <div class="card-body">
                        <h3 class="card-title">Comparte y presenta tus diagramas de manera sencilla</h3>
                        <div class="card-text">
                            <p> In eu imperdiet nisl. Nullam ornare urna lectus, et blandit elit lobortis eget. Nam
                                suscipit mauris ante, in rutrum dolor scelerisque vitae. Donec a porta nisl, sagittis
                                rhoncus mauris. Cras bibendum lacus tellus, id consectetur erat aliquam sed. Ut
                                suscipit, ex rutrum condimentum facilisis, risus risus finibus est, id vulputate erat
                                ipsum eu magna. Integer varius magna nec pharetra consectetur. Maecenas rutrum finibus
                                leo sed hendrerit. Suspendisse venenatis a massa at rutrum. Suspendisse egestas viverra
                                lacus vel finibus. Ut sed convallis nibh. Integer varius mattis molestie.
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </section>

        {{-- Acerca de Nosotros --}}
        <section id="about">
            <h2 class="card-title">Acerca de Nosostros</h2>
            <ul>
                <li class="card">
                    <div class="card-body">
                        <h3 class="card-title">Todas las figuras que necesitas para diseñar diagramas de
                            flujo profesionales.</h3>
                        <div class="card-text">
                            <ul>
                                <li>
                                    Somos una Empresa de tecnología en el ámbito de desarrollo de SW en Bolivia.
                                </li>
                                <li>Oficina Central en Santa Cruz, con presencia en las demás capitales del país.
                                    más de 100 ingenieros de software, administrativos y logística. </li>
                                <li>Contamos con Productos estrellas, además se realiza productos a medida.
                                    ERP, CRM, Gestión Documental, entre otros. </li>
                                <li>Cuentan con certificación de nivel 3 de CNNI
                                    Enfocados en la productividad, con herramientas CASE</li>
                                <li>En cada ciudad capital de país tenemos un equipo.</li>
                                <li>CMMI® es un enfoque de mejora de la capacidad que ofrece a las organizaciones los
                                    elementos esenciales para
                                    establecer
                                    buenas prácticas y así obtener procesos eficaces, que, en última instancia, mejoran
                                    su desempeño.
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </section>


    </div>



    <footer class="content-footer footer bg-footer-theme">
        <div
            class="container-xxl d-flex flex-wrap justify-content-between align-items-center py-2 flex-md-row flex-column">
            <div class="mb-2 mb-md-0">
                © <script>
                    document.write(new Date().getFullYear())
                </script>
                , realizado por <a href="https://github.com/GatoJustiniano/" target="_blank"
                    class="footer-link fw-bolder">Andres Justiniano</a>
            </div>
            <div>

                <a href="https://github.com/GatoJustiniano/" target="_blank" class="footer-link">GitHub</a>
                <a href="#" class="footer-link">(PHP v{{ PHP_VERSION }})</a>
                <a href="#" class="footer-link">Laravel v{{ Illuminate\Foundation\Application::VERSION }}</a>

            </div>
        </div>
    </footer>
    @endsection