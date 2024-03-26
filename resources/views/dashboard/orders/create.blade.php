@extends('dashboard.master', ['activePage' => ''])
@section('title', 'Orden')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div
                class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                <h5 class="card-title mb-sm-0 me-2">Orden</h5>
                <div class="action-btns">
                    <a class="btn btn-label-info me-3" href="{{ URL::previous() }}">
                        Retroceder
                    </a>
                    <form class="d-inline" method="POST" action="{{ route('orders.store') }}">
                        @csrf
                        <button type="submit" class="btn btn-success">Confirmar Orden</button>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-sm mb-3">
                        <thead>
                            <tr>
                                <th scope="col">Producto</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart->products as $product)
                            <tr>
                                <td>
                                    <img src="{{ asset($product->images->first()->path) }}" width="50">
                                    {{ $product->title }}
                                </td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->pivot->quantity }}</td>
                                <td>
                                    <strong>
                                        {{ $settingGeneral->currency . ' ' . $product->total }}
                                    </strong>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection