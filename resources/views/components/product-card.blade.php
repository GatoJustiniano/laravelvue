<div class="card h-100">
    <div id="carousel{{ $product->id }}" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($product->images as $image)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <img class="card-img-top" src="{{ asset($image->path) }}" height="200">
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
    <div class="card-body">
        <small class="text-muted">Precio</small>
        <div class="d-flex justify-content-between mb-2">
            <h5 class="text-primary mb-0">{{ $settingGeneral->currency }} {{ $product->price }}</h5>            
            <span class="badge bg-label-primary">{{ $product->stock }} Stock</span>
        </div>
        <h5 class="mb-2 pb-1">{{ $product->title }}</h5>        
        <p class="small">{{ $product->description }}</p>        
    </div>
    <div class="card-footer">
        @if (isset($cart))
            <p class="card-text">
                {{ $product->pivot->quantity }} en el carrito <strong>(${{ $product->total }})</strong>
            </p>
            <form
                class="d-inline"
                method="POST"
                action="{{ route('products.carts.destroy', ['cart' => $cart->id, 'product' => $product->id]) }}"
            >
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-warning">Remover del carrito</button>
            </form>
        @else
            <form
                class="d-inline"
                method="POST"
                action="{{ route('products.carts.store', ['product' => $product->id]) }}"
            >
                @csrf
                <button type="submit" class="btn btn-success">Añadir a carrito</button>
            </form>
        @endif
    </div>
</div>