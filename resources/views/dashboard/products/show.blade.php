@extends('dashboard.master', ['activePage' => 'products'])
@section('title', 'Detalles del Productos '.$product->title )

@section('content')

@include('dashboard.partials.validation-error')
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="row">
        <!-- Lado Izquierdo -->
        <div class="col-xl-6 col-lg-6 col-md-6 order-1 order-md-0">
            <!-- Card -->
            <div class="card">
                <div class="card-body">
                    <div class="user-avatar-section">
                        <div class="d-flex align-items-center flex-column">                            
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
            <!-- /Card -->
        </div>
        <!--/ Sidebar -->


        <!-- Content -->
        <div class="col-xl-6 col-lg-6 col-md-6 order-0 order-md-1">            
            <div class="card">
                <div id="carousel{{ $product->id }}" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($product->images as $image)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <img class="card-img-top" src="{{ asset($image->path) }}" height="400px">
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
        </div>
        <!--/ Content -->
    </div>

</div>
@endsection