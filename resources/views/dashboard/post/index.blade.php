@extends('dashboard.master')

@section('content')

    <a class="btn btn-success mt-3 mb-3" href="{{ route('post.create') }}">
        Crear
    </a>


    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Título</th>
            <th scope="col">Posteado</th>
            <th scope="col">Creación</th>
            <th scope="col">Actualización</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->posted }}</td>
                <td>{{ $post->created_at->format('Y-m-d') }}</td>
                <td>{{ $post->updated_at->format('Y-M-d') }}</td>
                <td>
                    <a href="{{ route('post.show',$post->id) }}" class="btn btn-primary">Ver</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}

@endsection




