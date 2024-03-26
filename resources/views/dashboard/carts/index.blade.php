@extends('dashboard.master', ['activePage' => ''])
@section('title', 'Carrito')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div
                class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                <h5 class="card-title mb-sm-0 me-2">Carrito</h5>
                <div class="action-btns">
                    <a class="btn btn-label-info me-3" href="{{ URL::previous() }}">
                        Retroceder
                    </a>
                    <a class="btn btn-label-success mb-3" href="{{ route('orders.create') }}">
                        Iniciar Orden
                    </a>
                </div>
            </div>
            <div class="card-body">
                @if (!isset($cart) || $cart->products->isEmpty())
                <div class="alert alert-warning">
                    Tu carrito está vacío.
                </div>
                @else
                <h4 class="text-center">Total <strong>{{ $cart->total }}</strong></h4>                
                <div class="row">
                    @foreach ($cart->products as $product)
                    <div class="col-md-3 col-xl-3 mb-4">
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