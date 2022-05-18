@extends('dashboard.master', ['activePage' => 'posts'])

@section('content')

    @include('dashboard.partials.validation-error')
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body ">
                    <form action="{{ route('post.store') }}" method="POST">
                        @include('dashboard.post._form')
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <a href="{{ URL::previous() }}" class="btn btn-label-secondary d-grid w-100 mb-3">
                        Retroceder
                    </a>
                </div>
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>

@endsection
