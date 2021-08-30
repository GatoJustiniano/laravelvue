@extends('dashboard.master')

@section('content')

@include('dashboard.partials.validation-error')

    <form action="{{ route('post.store') }}" method="POST">
        
        <div class="form-group">
            <label for="title">Titulo</label>
            <input readonly class="form-control" type="text" name="title" id="title" value="{{ $post->title }}">
        </div>
    
        <div class="form-group">
            <label for="url_clean">Url limpia</label>
            <input readonly class="form-control" type="text" name="url_clean" id="url_clean" value="{{ $post->url_clean }}">
        </div>
    
        <div class="form-group">
            <label for="content">Contenido</label>
            <textarea class="form-control" name="content" id="content" cols="20" rows="3">{{ $post->content }}</textarea>
        </div>    
        
    </form>

@endsection
