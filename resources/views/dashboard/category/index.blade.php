@extends('dashboard.master')

@section('content')

    <a class="btn btn-success mt-3 mb-3" href="{{ route('category.create') }}">
        Crear
    </a>


    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Título</th>
            <th scope="col">Creación</th>
            <th scope="col">Actualización</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $categoria)
            <tr>
                <td>{{ $categoria->id }}</td>
                <td>{{ $categoria->title }}</td>
                <td>{{ $categoria->created_at->format('Y-m-d') }}</td>
                <td>{{ $categoria->updated_at->format('Y-M-d') }}</td>
                <td>
                    <a href="{{ route('category.show',$categoria->id) }}" class="btn btn-primary">Ver</a>
                    <a href="{{ route('category.edit',$categoria->id) }}" class="btn btn-primary">Editar</a>
                    
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="{{ $categoria->id }}">
                        Eliminar
                    </button>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categories->links() }}

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
                <p>Seguro que deseas eliminar la categoria seleccionada?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                <form id="formDelete" action="{{ route('category.destroy',0) }}" method="POST" data-action="{{ route('category.destroy',0) }}" >
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
                modal.find('.modal-title').text('Vas a borrar la categoría ' + id)
                
            });
        };


    </script>

@endsection




