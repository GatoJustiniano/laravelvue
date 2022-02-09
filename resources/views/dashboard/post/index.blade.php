@extends('dashboard.master')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div
                class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                <h5 class="card-title mb-sm-0 me-2">Listado de Posts</h5>
                <div class="action-btns">
                    <a class="btn btn-label-info me-3" href="{{ URL::previous() }}">
                        Volver
                    </a>
                    <a class="btn btn-label-success " href="{{ route('post.create') }}">
                        Crear
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Título</th>
                                <th scope="col">Categoría</th>
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
                                <td>{{ $post->category->title }}</td>
                                <td>{{ $post->posted }}</td>
                                <td>{{ $post->created_at->format('Y-m-d') }}</td>
                                <td>{{ $post->updated_at->format('Y-M-d') }}</td>
                                <td>
                                    <a href="{{ route('post.show',$post->id) }}" class="btn btn-primary">Ver</a>
                                    <a href="{{ route('post.edit',$post->id) }}" class="btn btn-primary">Editar</a>
                                    <a href="{{ route('post-comment.post',$post->id) }}"
                                        class="btn btn-primary">Comentarios</a>

                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal" data-id="{{ $post->id }}">
                                        Eliminar
                                    </button>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $posts->links() }}

                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Seguro que deseas eliminar el post seleccionado?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cerrar</button>

                                    <form id="formDelete" action="{{ route('post.destroy',0) }}" method="post"
                                        data-action="{{ route('post.destroy',0) }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        window.onload = function () {
                    $('#deleteModal').on('show.bs.modal', function (event) {
        
                        var button = $(event.relatedTarget) // Button that triggered the modal
                        var id = button.data('id') // Extract info from data-* attributes
                        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        
                        action = $('#formDelete').attr('data-action').slice(0,-1)
        
                        $('#formDelete').attr('action',action + id )
        
                        var modal = $(this)
                        modal.find('.modal-title').text('Vas a borrar el POST ' + id)
                        
                    });
                };
        
        
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>






@endsection