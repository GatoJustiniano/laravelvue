@extends('dashboard.master', ['activePage' => 'contacts'])

@section('content')

@include('dashboard.partials.validation-error')

    <div class="form-group">
        <label for="name">Nombre</label>
        <input readonly class="form-control" type="text" name="name" id="name" value="{{ $contact->name }}">
    </div>

    <div class="form-group">
        <label for="surname">Apellido</label>
        <input readonly class="form-control" type="text" name="surname" id="surname" value="{{ $contact->surname }}">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input readonly class="form-control" type="text" name="email" id="email" value="{{ $contact->email }}">
    </div>

    <div class="form-group">
        <label for="message">Mensaje</label>
        <textarea class="form-control" name="message" id="message" cols="20" rows="3">{{ $contact->message }}</textarea>
    </div>    
    

@endsection
