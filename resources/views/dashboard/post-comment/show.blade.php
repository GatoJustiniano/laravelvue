@extends('dashboard.master')

@section('content')

@include('dashboard.partials.validation-error')

    <div class="form-group">
        <label for="title">Titulo</label>
        <input readonly class="form-control" type="text" name="title" id="title" value="{{ $postComment->title }}">
    </div>

    <div class="form-group">
        <label for="user">Usuario</label>
        <input readonly class="form-control" type="text" name="user" id="user" value="{{ $postComment->user->name  }}">
    </div>

    <div class="form-group">
        <label for="approved">Aprobado</label>
        <input readonly class="form-control" type="text" name="approved" id="approved" value="{{ $postComment->approved }}">
    </div>

    <div class="form-group">
        <label for="message">Mensaje</label>
        <textarea class="form-control" name="message" id="message" cols="20" rows="3">{{ $postComment->message }}</textarea>
    </div>    
    

@endsection
