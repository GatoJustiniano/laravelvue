@extends('dashboard.master')

@section('content')

@include('dashboard.partials.validation-error')

    <form action="{{ route('post.store') }}" method="POST">
    
        @csrf
    
        <div class="form-group">
            <label for="title">Titulo</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">

            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
        <div class="form-group">
            <label for="url_clean">Url limpia</label>
            <input class="form-control" type="text" name="url_clean" id="url_clean" value="{{ old('title') }}">
        </div>
    
        <div class="form-group">
            <label for="content">Url limpia</label>
            <textarea class="form-control" name="content" id="content" cols="20" rows="3">{{ old('title') }}</textarea>
        </div>
    
        <input type="submit" value="Enviar">
    
        
    </form>

@endsection
