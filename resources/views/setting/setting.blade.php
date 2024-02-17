@extends('dashboard.master', ['activePage' => 'settings'])
@section('title', 'Settings')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div
                class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                <h5 class="card-title mb-sm-0 me-2">Configuración General</h5>
                <p class="card-title mb-sm-0 me-2">Modificado {{ $data_setting->updated_at->format($data_setting->date_format . ' H:i:s') }}</p>
                <div class="action-btns">
                    <a class="btn btn-label-info me-3" href="{{ URL::previous() }}">
                        Retroceder
                    </a>
                </div>
            </div>

            <div class="card-body mt-3">
                <form action="{{ route('setting.generalStore') }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label" for="site_title">Título del sitio</label>
                                <input type="text" name="site_title" id="site_title" class="form-control"
                                    value="@if($data_setting){{$data_setting->site_title}}@endif" required />
                            </div>
                        </div>
                        <div class="row col-md-6 mb-3">                            
                            <div class="col form-group">
                                <label class="form-label">Logo del sitio                                     
                                    <span class="badge bg-secondary" 
                                        data-bs-toggle="tooltip" data-bs-placement="right" 
                                        title="Logo del sitio. Formato de archivo permitido: .svg no mayor a 1mb">
                                        <i class='bx bx-info-circle'></i>
                                    </span>
                                </label>
                                <input type="file" name="site_logo" id="site_logo" 
                                    class="form-control"  accept=".svg"  
                                />
                                @if($errors->has('site_logo'))
                                <span>
                                    <strong>{{ $errors->first('site_logo') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="col-md-2 text-center">      
                                <label class="invisible">.</label>                      
                                @if ($data_setting->site_logo)
                                <img src="{{ url('img_logo', $data_setting->site_logo) }}"                                    
                                    width="50" alt="img logo" >
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label" for="currency" >Divisa</label>
                                <input type="text" name="currency" id="currency" class="form-control"
                                    value="@if($data_setting){{$data_setting->currency}}@endif" required />
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label" for="t_c">Tasa de cambio</label>
                                <div class="input-group">
                                    <input type="text" name="t_c" id="t_c" class="form-control"
                                        value="@if($data_setting){{$data_setting->t_c}}@endif" 
                                        required 
                                        aria-label="Tasa de cambio (con coma y dos decimales)"
                                        >                                    
                                    <span class="input-group-text">0,00</span>
                                </div>                                 
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Formato de fecha</label>
                                @if($data_setting)
                                <input type="hidden" name="date_format_hidden" value="{{$data_setting->date_format}}">
                                @endif
                                <select name="date_format" class="select2 form-control">
                                    <option value="d-m-Y"> dd-mm-yyyy</option>
                                    <option value="d/m/Y"> dd/mm/yyyy</option>
                                    <option value="d.m.Y"> dd.mm.yyyy</option>
                                    <option value="m-d-Y"> mm-dd-yyyy</option>
                                    <option value="m/d/Y"> mm/dd/yyyy</option>
                                    <option value="m.d.Y"> mm.dd.yyyy</option>
                                    <option value="Y-m-d"> yyyy-mm-dd</option>
                                    <option value="Y/m/d"> yyyy/mm/dd</option>
                                    <option value="Y.m.d"> yyyy.mm.dd</option>
                                </select>
                            </div>                            
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Tipo de notificación</label>
                                @if($data_setting)
                                <input type="hidden" name="notification_type_hidden" value="{{$data_setting->notification_type}}">
                                @endif
                                <select name="notification_type" class="select2 form-control">
                                    <option value="nt-1">Sweet Alert</option>
                                    <option value="nt-2">Badge Bootstrap</option>                                    
                                </select>
                            </div>                            
                        </div>
                        <div class="col-12 form-group mt-3">
                            <input type="submit" value="Confirmar" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>

    window.onload = function () {
        $('.select2').select2({
            minimumResultsForSearch: Infinity
        });
        $('select[name=date_format]').val($("input[name='date_format_hidden']").val());
        $('select[name=notification_type]').val($("input[name='notification_type_hidden']").val());
        $('.select2').trigger('change');        
    };    
</script>

@endsection