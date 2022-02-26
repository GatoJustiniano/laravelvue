@extends('dashboard.master')
@section('title', 'Vista de post')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row invoice-preview">
            <!-- Tarjeja de presentación -->
            <div class="col-xl-9 col-md-8 col-12 mb-md-0 mb-4">
                <div class="card invoice-preview-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column p-sm-3 p-0">
                            <div class="col-7 mb-xl-0 mb-4">
                                <h2>{{ $post->title }}</h2>
                                <p class="mb-1">
                                    <span class="me-1 fw-bold">Categoría:</span>
                                    <a href="{{ route('category.show',$post->category->id) }}">
                                        <span class="badge bg-secondary">{{$post->category->title}}
                                        </span>
                                    </a>
                                </p>
                                <p class="mb-1">
                                    <span class="me-1 fw-bold">Tipo de url:</span>
                                    <span>{{$post->url_clean}}</span>
                                </p>
                                <p class="mb-1">
                                    <span class="me-1 fw-bold">Posteado:</span>
                                    @if ($post->posted == "yes" )
                                        <span class="badge badge-dot bg-success me-1"></span>{{$post->posted}}
                                        @else
                                        <span class="badge badge-dot bg-danger  me-1"></span>{{$post->posted}}
                                    @endif
                                </p>
                                <p class="mb-2">
                                    <span class="me-1 fw-bold">Contenido:</span>
                                    <span>{{$post->content}}</span>
                                </p>
                                
                            </div>
                            <div>
                                <h4>Datos</h4>
                                <div>
                                    @isset($post->image->image)
                                        <img class="img-fluid rounded ms-3" src="{{ asset('/images_post')}}/{{ $post->image->image }}" 
                                            height="210" width="210" alt="{{ $post->image->image }}" />
                                    @endisset
                                </div>
                                <div class="mb-2">
                                    <span class="me-1 fw-bold">Fecha de Creación:</span>
                                    <span class="">{{$post->created_at}}</span>
                                </div>
                                <div>
                                    <span class="me-1 fw-bold">Fecha de Actualización:</span>
                                    <span class="">{{$post->updated_at}} </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
            <!-- /Tarjeja de presentación -->
    
            <!-- Barra de Botones Derecho -->
            <div class="col-xl-3 col-md-4 col-12 invoice-actions">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ URL::previous() }}" class="btn btn-label-secondary d-grid w-100 mb-3">
                            Retroceder
                        </a>
                        @can('post.edit')
                            <a href="{{ route('post.edit',$post->id) }}" class="btn btn-label-secondary d-grid w-100 mb-3">
                                Editar
                            </a>
                        @endcan
                    </div>
                </div>
            </div>
            <!-- /Barra de Botones Derecho -->
        </div>   
    
    </div>

@endsection
