@extends('dashboard.master', ['activePage' => 'products'])
@section('title', 'Listado de Productos')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div
                class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                <h5 class="card-title mb-sm-0 me-2">Listado de Productos</h5>
                <div class="action-btns">
                    <a class="btn btn-label-info me-3" href="{{ URL::previous() }}">
                        Retroceder
                    </a>
                    @can('post.create')
                    <a class="btn btn-label-success " href="{{ route('product.create') }}">
                        Crear
                    </a>
                    @endcan
                </div>
            </div>
            <div class="card-body">
                @empty ($products)
                <div class="alert alert-danger">
                    No products yet!
                </div>
                @else
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-3">
                        @include('components.product-card')
                    </div>
                    @endforeach
                </div>
                @endempty
            </div>
        </div>
    </div>
</div>

@endsection