@extends('dashboard.master')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div
                    class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                    <h5 class="card-title mb-sm-0 me-2">Listado de </h5>
                    <div class="action-btns">
                        <a class="btn btn-label-info me-3" href="{{ URL::previous() }}">
                            Retroceder
                        </a>
                        @can('post.create')
                            <a class="btn btn-label-success " href="">
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
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($)
                                <tr>
                                    
                                    <td>
                                        @can('.show')
                                            <a href="{{  }}" class="btn btn-outline-primary btn-icon ">
                                                <i class="material-icons">person</i>
                                            </a>
                                        @endcan
                                        @can('.edit')
                                            <a href="{{  }}" class="btn btn-outline-primary btn-icon ">
                                                <i class="material-icons">edit</i>
                                            </a>
                                        @endcan

                                        @can('.destroy')
                                            <button type="button" class="btn btn-outline-danger btn-icon " data-bs-toggle="modal"
                                                data-bs-target="#deleteModal" data-id="{{ $categoria->id }}">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        @endcan

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $->links() }}
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection