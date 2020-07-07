
@extends('layouts.app')

@section('content')

<div class="container">
{{ $message=Session::get('message') }} 
 
 <!-- Muestro el mensaje de validación -->
 @include('alerts.request')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Sucursales') }}</div>

                <div class="card-body">
<form method="POST" action="{{ route('admin/sucursales/actualizar',$sucursales->id) }}" role="form" enctype="multipart/form-data">
 
  <input type="hidden" name="_method" value="PUT">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
 
  @include('admin.sucursales.frm.prt')
                                                          
</form>
    
</div>
            </div>
        </div>
    </div>
</div>
@endsection