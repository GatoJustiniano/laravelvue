@extends('dashboard.master')

@section('content')



    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Email</th>
            <th scope="col">Creación</th>
            <th scope="col">Actualización</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->surname }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->created_at->format('Y-m-d') }}</td>
                <td>{{ $contact->updated_at->format('Y-M-d') }}</td>
                <td>
                    <a href="{{ route('contact.show',$contact->id) }}" class="btn btn-primary">Ver</a>
                    
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $contact->id }}">
                        Eliminar
                    </button>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $contacts->links() }}

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <p>Seguro que deseas eliminar el contact seleccionado?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                <form id="formDelete" action="{{ route('contact.destroy',0) }}" method="POST" data-action="{{ route('contact.destroy',0) }}" >
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

@endsection




