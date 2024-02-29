@extends('dashboard.master', ['activePage' => 'products'])
@section('title', 'Listado de Productos')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div
                class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                <h5 class="card-title mb-sm-0 me-2">Listado de Productos</h5>
                <div class="action-btns">
                    <a class="btn btn-label-info me-3" href="{{ URL::previous() }}">
                        Retroceder
                    </a>
                    @can('post.create')
                    <a class="btn btn-label-success " href="{{ route('product.create') }}">
                        Crear
                    </a>
                    @endcan
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-sm mb-3">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Creación</th>
                                <th scope="col">Actualización</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->description }}</td>
                                <td>
                                    <span class="badge bg-info">{{ $role->price }}</span>                                    
                                </td>
                                <td>
                                    <span class="badge bg-info">{{ $role->stock }}</span>                                    
                                </td>
                                <td>{{ $product->created_at->format($settingGeneral->date_format) }}</td>
                                <td>{{ $product->updated_at->format($settingGeneral->date_format) }}</td>
                                <td>
                                    <div class="d-inline-block text-nowrap">
                                        @can('product.show')
                                        <a href="{{ route('product.show',$product->id) }}"
                                            class="btn btn-outline-secondary btn-sm btn-icon ">
                                            <i class="material-icons">visibility</i>
                                        </a>
                                        @endcan
                                        @can('product.edit')
                                        <a href="{{ route('product.edit',$product->id) }}"
                                            class="btn btn-outline-secondary btn-sm btn-icon ">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        @endcan
    
                                        @can('product.destroy')
                                        <button type="button" class="btn btn-outline-secondary btn-sm btn-icon "
                                            data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $product->id }}">
                                            <i class="material-icons">delete</i>
                                        </button>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $products->links() }}
                </div>
            </div>            
        </div>
    </div>
</div>


<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">     
                <h2>Ingresar datos del product. </h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>                
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <p>Seguro que deseas eliminar el usuario seleccionada?</p>
            </div>
            <div class="modal-footer">                
                <form id="formDelete" action="{{ route('product.destroy',0) }}" method="POST"
                    data-action="{{ route('product.destroy',0) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script>
    window.onload = function () {        
        $('#deleteModal').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget) 
            var id = button.data('id') 

            action = $('#formDelete').attr('data-action').slice(0,-1)

            $('#formDelete').attr('action',action + id )

            var modal = $(this)
            modal.find('.modal-title').text('Vas a borrar el usuario ' + id)
            
        });        

</script>

@endsection