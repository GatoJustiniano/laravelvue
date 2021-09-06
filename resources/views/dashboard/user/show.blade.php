@extends('dashboard.master')

@section('content')

@include('dashboard.partials.validation-error')

    <form action="{{ route('user.store') }}" method="POST">
    
        <div class="form-group">
            <label for="name">Nombre</label>
            <input readonly class="form-control" type="text" name="name" id="name" value="{{ $user->name }}">
        </div>

        <div class="form-group">
            <label for="surname">Apellido</label>
            <input readonly class="form-control" type="text" name="surname" id="surname" value="{{ $user->surname }}">
        </div>
    
        
    </form>

@endsection
