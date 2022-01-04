@extends('dashboard.master')

@section('content')

    <div class="col-3 mb-3" >
        <form action="{{ route('post-comment.post',1) }}" id="filterForm">
            <div class="form-row">
                <div class="col-10">
                    <select name="" id="filterPost" class="form-control">
                        @foreach ($posts as $p)
                            <option value="{{ $p->id }}" {{ $p->id == $post->id ? 'selected' : '' }} >
                                {{ Str::limit( $p->title, 25, '...') }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-2">
                    <button class="btn btn-success" type="submit">Enviar</button>
                </div>
            </div>
        </form>
    </div>

    @if (count($postComments)> 0)

        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Aprobado</th>
                <th scope="col">Usuario</th>
                <th scope="col">Creación</th>
                <th scope="col">Actualización</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($postComments as $postComment)
                <tr>
                    <td>{{ $postComment->id }}</td>
                    <td>{{ $postComment->title }}</td>
                    <td>{{ $postComment->approved }}</td>
                    <td>{{ $postComment->user->name }}</td>
                    <td>{{ $postComment->created_at->format('Y-m-d') }}</td>
                    <td>{{ $postComment->updated_at->format('Y-M-d') }}</td>
                    <td>
                        <a href="{{ route('post-comment.show',$postComment->id) }}" class="btn btn-primary">Ver</a>
                        
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="{{ $postComment->id }}">
                            Eliminar
                        </button>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $postComments->links() }}

        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Seguro que deseas eliminar el Comentario del post seleccionado?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                    <form id="formDelete" action="{{ route('post-comment.destroy',0) }}" method="POST" data-action="{{ route('post-comment.destroy',0) }}" >
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
                    modal.find('.modal-title').text('Vas a borrar el comentario del post ' + id)
                    
                });
            };


        </script>

    @else
        
        <div class="alert alert-info" role="alert">
            <h4 class="alert-heading">Lo sentimos!</h4>
            <p>No existen comentarios para el post seleccionado!</p>
            <hr>
            <a href="{{ URL::previous() }}" class="btn btn-info" >Volver atrás! </a>
        </div>
    @endif

    <script>
        window.onload = function () {
            $("#filterForm").submit(function () {
                var action = $(this).attr("action");
                action = action.replace(/[0-9]/g,$("#filterPost").val());
                $(this).attr('action',action)
            });
        }
    </script>

@endsection




