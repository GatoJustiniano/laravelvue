<div class="card">
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
        <h4 class="text-right"><strong>${{ $product->price }}</strong></h4>
        <h5 class="card-title">{{ $product->title }}</h5>
        <p class="card-text">{{ $product->description }}</p>
        <p class="card-text"><strong>{{ $product->stock }} left</strong></p>        
    </div>
</div>