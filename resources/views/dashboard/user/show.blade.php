@extends('dashboard.master', ['activePage' => 'users'])
@section('title', 'Detalles del Usuario '.$user->last_name )

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
                                <img class="img-fluid rounded my-4"
                                    src="{{ asset('images_post/1634095210.jpg') }}" height="110" width="110"
                                    alt="Imagen de user {{$user->id}}" />
                                <div class="user-info text-center">
                                    <h4 class="mb-2">{{ $user->name }}</h4>
                                    @forelse (Auth::user()->roles as $role)
                                        <span class="badge bg-label-secondary">{{ $role->name }}</span>
                                    @empty
                                        <span>Sin roles</span>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        
                        <h5 class="pb-2 border-bottom mb-2">Datos</h5>
                        <div class="info-container">
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Nombres:</span>
                                    <span>{{ $user->name . ' ' . $user->middle_name }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Apellidos:</span>
                                    <span>{{ $user->last_name . ' ' . $user->maternal_last_name }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Correo Electrónico:</span>
                                    <span>{{ $user->email }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Status:</span>
                                    <span class="badge bg-label-success">Active</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Roles:</span>
                                    @forelse ($user->roles as $role)
                                        <span>{{ $role->name }}</span>
                                    @empty
                                        <span>Sin roles</span>
                                    @endforelse
                                </li>
                            </ul>
                            <div class="d-flex justify-content-center pt-3">
                                <a href="{{ route('user.edit',$user->id) }}" class="btn btn-primary me-3">
                                    Editar
                                </a>
                                @can('roles.index')
                                    <a href="{{ route('roles.index') }}" class="btn btn-label-danger">
                                        Administrar roles
                                    </a>
                                @endcan
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
                        <a class="nav-link active" href="">
                            <i class="bx bx-user me-1"></i> Cuenta
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="bx bx-lock-alt me-1"></i> Seguridad
                        </a>
                    </li>
                </ul>
                <!--/ User Pills -->

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

                <!-- Invoice table -->
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
                <!-- /Invoice table -->
            </div>
            <!--/ User Content -->
        </div>

    </div>
@endsection
