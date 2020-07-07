@extends('layouts.app')
@section('content')

<script type="text/javascript">
 
  function confirmarEliminar()
  {
  var x = confirm("Estas seguro de Eliminar?");
  if (x)
     return true;
  else
     return false;
  }
 
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Sucursales') }}</div>
                    <div class="card-body">
                    @if(Session::has('message'))
    <div class="alert alert-primary" role="alert">
        {{ Session::get('message') }}
    </div>
@endif
<a href="{{ route('admin/sucursales/crear') }}" class="btn btn-success mt-4 ml-3">  Agregar </a><br/><br/><br/>
 
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Domicilio</th>
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sucursales as $suc)
        <tr>
            <td class="v-align-middle">{{$suc->codigo}}</td>
            <td class="v-align-middle">{{$suc->domicilio}}</td>
            <td class="v-align-middle">{{$suc->telefono}}</td>
            
            <td class="v-align-middle">
 
                <form action="{{ route('admin/sucursales/eliminar',$suc->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return confirmarEliminar()">
 
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <a href="{{ route('admin/sucursales/actualizar',$suc->id) }}" class="btn btn-primary">Editar</a>
 
                    <button type="submit" class="btn btn-danger">Eliminar</button>
 
                </form>
 
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
            </div>
        </div>
    </div>
</div>
@endsection