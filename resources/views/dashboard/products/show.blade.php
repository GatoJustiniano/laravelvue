@extends('dashboard.master', ['activePage' => 'products'])
@section('title', 'Detalles del Productos '.$product->title )

@section('content')

@include('dashboard.partials.validation-error')
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="row">
        <!-- User Sidebar -->
        <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
            <!-- User Card -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="user-avatar-section">
                        <div class=" d-flex align-items-center flex-column">
                            <img class="img-fluid rounded my-4" src="{{ asset('images_post/1634095210.jpg') }}"
                                height="110" width="110" alt="Imagen de producto {{$product->id}}" />
                            <div class="user-info text-center">
                                <h4 class="mb-2">{{ $product->title }}</h4>
                                <span class="badge bg-label-secondary">Categoría</span>
                            </div>
                        </div>
                    </div>

                    <h5 class="pb-2 border-bottom mb-2">Datos</h5>
                    <div class="info-container">
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <span class="fw-bold me-2">Titulo:</span>
                                <span>{{ $product->title }}</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Descripción:</span>
                                <span>{{ $product->description }}</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Precio:</span>
                                <span>{{ $product->price }}</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Status:</span>
                                <span class="badge bg-label-secondary">{{ $product->status }}</span>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-center pt-3">
                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary me-3">
                                Editar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /User Card -->
        </div>
        <!--/ User Sidebar -->


        <!-- User Content -->
        <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
            <!-- User Pills -->
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                    <button class="nav-link active" id="pills-primer-tab" type="button" data-bs-toggle="pill"
                        data-bs-target="#pills-primer" role="tab" aria-controls="pills-primer" aria-selected="true">
                        <i class="bx bx-user me-1"></i> Cuenta
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="pills-segundo-tab" type="button" data-bs-toggle="pill"
                        data-bs-target="#pills-segundo" role="tab" aria-controls="pills-segundo" aria-selected="true">
                        <i class="bx bx-lock-alt me-1"></i> Seguridad
                    </button>
                </li>
            </ul>
            <!--/ User Pills -->

            <div class="tab-content p-0" id="myTabContent">
                <!-- tabPrimer -->
                <div class="tab-pane fade show active" id="pills-primer" role="tabpanel"
                    aria-labelledby="pills-primer-tab">
                    <!-- Project table -->
                    <div class="card mb-4">
                        <h5 class="card-header">Lista de proyectos</h5>
                        <div class="table-responsive mb-3">
                            <table class="table datatable-project border-top">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Proyectos</th>
                                        <th class="text-nowrap">Total equipos</th>
                                        <th>Tipo</th>
                                        <th>Horas</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <!-- /Project table -->
                    <div class="card mb-4">
                        <div class="table-responsive mb-3">
                            <table class="table datatable-invoice border-top">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>ID</th>
                                        <th><i class='bx bx-trending-up'></i></th>
                                        <th>Total</th>
                                        <th>Issued Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div id="carousel{{ $product->id }}" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($product->images as $image)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <img class="d-block w-100" src="{{ asset($image->path) }}" height="500">
                            </div>
                            @endforeach                            
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel{{ $product->id }}"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel{{ $product->id }}"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <!-- /tabPrimer -->

                <!-- tabSegundo -->
                <div class="tab-pane fade" id="pills-segundo" role="tabpanel" aria-labelledby="pills-segundo-tab">
                    <div class="card mb-4">
                        <div class="table-responsive mb-3">
                            <table class="table datatable-invoice border-top">
                                <thead>
                                    <tr>
                                        <th>Operación</th>
                                        <th>ID</th>
                                        <th><i class='bx bx-trending-up'></i></th>
                                        <th>Total</th>
                                        <th>Issued Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /tabSegundo -->
            </div>


        </div>
        <!--/ User Content -->
    </div>

</div>
@endsection