@extends('dashboard.master')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Permisos</h4>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-12 text-right">
          @can('permissions.create')
            <a href="{{ route('permissions.create') }}" class="btn btn-sm btn-facebook">Añadir permiso</a>
          @endcan
          </div>
        </div>
        <div class="table-responsive">
          <table class="table">
            <thead class="text-primary">
              <th>ID</th>
              <th>Nombre</th>
              <th>Guard</th>
              <th>Fecha Creacion</th>
              <th class="text-right">Acciones</th>
            </thead>
            <tbody>
              @forelse ($permissions as $permission)
              <tr>
                <td>{{ $permission->id }}</td>
                <td>{{ $permission->name }}</td>
                <td>{{ $permission->guard_name }}</td>
                <td>{{ $permission->created_at }}</td>
                <td class="td-actions text-right">
                  @can('permissions.show')
                  <a href="{{ route('permissions.show', $permission->id) }}" class="btn btn-info"><i
                      class="material-icons">person</i></a>
                  @endcan
                  @can('permissions.edit')
                  <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-warning"><i
                      class="material-icons">edit</i></a>
                  @endcan
                  @can('permissions.destroy')
                  <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST"
                    style="display: inline-block;" onsubmit="return confirm('Seguro?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit" rel="tooltip">
                      <i class="material-icons">close</i>
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
        </div>
      </div>
      <div class="card-footer mr-auto">
        {{ $permissions->links() }}
      </div>
    </div>
  </div>
</div>
@endsection
