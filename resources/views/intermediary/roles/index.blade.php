@extends('dashboard.master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div
                class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                <h5 class="card-title mb-sm-0 me-2">Listado de Roles</h5>
                <div class="action-btns">
                    <a class="btn btn-label-info me-3" href="{{ URL::previous() }}">
                        Retroceder
                    </a>
                    @can('roles.create')
                    <a class="btn btn-label-success " href="{{ route('roles.create') }}">
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
                                <th scope="col"> Permisos </th>
                                <th scope="col"> Acciones </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->guard_name }}</td>
                                <td class="text-primary">{{ $role->created_at->toFormattedDateString() }}</td>
                                <td>
                                    @forelse ($role->permissions as $permission)
                                    <span class="badge rounded-pill bg-label-info">{{ $permission->name }}</span>
                                    @empty
                                    <span class="badge rounded-pill bg-label-danger">Permisos no Definidos</span>
                                    @endforelse
                                </td>
                                <td>
                                    @can('roles.show')
                                    <a href="{{ route('roles.show',$role->id) }}"
                                        class="btn btn-outline-primary btn-icon ">
                                        <i class="material-icons">person</i>
                                    </a>
                                    @endcan
                                    @can('roles.edit')
                                    <a href="{{ route('roles.edit',$role->id) }}"
                                        class="btn btn-outline-primary btn-icon ">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    @endcan
                                    @can('roles.destroy')
                                    <form action="{{ route('roles.destroy', $role->id) }}" method="post"
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
                    {{ $roles->links() }}

                </div>
            </div>
        </div>
    </div>
</div>

@endsection