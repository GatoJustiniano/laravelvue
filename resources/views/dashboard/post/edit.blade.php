@extends('dashboard.master')

@section('content')

    @include('dashboard.partials.validation-error')
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body ">

                    <form action="{{ route('post.update', $post->id) }}" method="POST">
                        @method('PUT')
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
                    <form action="{{ route('post.image',$post) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                            <div class="col-3">
                                <input type="submit" value="Subir" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection