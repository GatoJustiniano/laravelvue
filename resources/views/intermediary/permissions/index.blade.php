@extends('dashboard.master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div
                class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                <h5 class="card-title mb-sm-0 me-2">Listado de Permisos</h5>
                <div class="action-btns">
                    <a class="btn btn-label-info me-3" href="{{ URL::previous() }}">
                        Retroceder
                    </a>
                    @can('permissions.create')
                    <a class="btn btn-label-success " href="{{ route('permissions.create') }}">
                        Crear
                    </a>
                    @endcan
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive ">
                    <table class="table table-sm mb-3">
                        <thead>
                            <tr>
                                <th scope="col"> # </th>
                                <th scope="col"> Nombre </th>
                                <th scope="col"> Guard </th>
                                <th scope="col"> Fecha de creación </th>
                                <th scope="col"> Acciones </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($permissions as $permission)
                            <tr>
                                <td>{{ $permission->id }}</td>
                                <td>{{ $permission->name }}</td>
                                <td>{{ $permission->guard_name }}</td>
                                <td class="text-primary">{{ $permission->created_at->toFormattedDateString() }}</td>
                                <td>
                                    @can('permissions.show')
                                    <a href="{{ route('permissions.show',$permission->id) }}"
                                        class="btn btn-outline-primary btn-icon ">
                                        <i class="material-icons">person</i>
                                    </a>
                                    @endcan
                                    @can('permissions.edit')
                                    <a href="{{ route('permissions.edit',$permission->id) }}"
                                        class="btn btn-outline-primary btn-icon ">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    @endcan
                                    @can('permissions.destroy')
                                    <form action="{{ route('permissions.destroy', $permission->id) }}" method="post"
                                        onsubmit="return confirm('Está seguro de eliminar?')"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" rel="tooltip" class="btn btn-outline-danger btn-icon">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </form>
                                    @endcan

                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="2">Sin registros.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $permissions->links() }}

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
