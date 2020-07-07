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
                <div class="card-header">{{ __('Revistas') }}</div>
                    <div class="card-body">
                    @if(Session::has('message'))
    <div class="alert alert-primary" role="alert">
        {{ Session::get('message') }}
    </div>
@endif
<a href="{{ route('admin/revistas/crear') }}" class="btn btn-success mt-4 ml-3">  Agregar </a><br/><br/><br/>
 
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Numero de Registro</th>
            <th>Titulo</th>
            <th>Periocidad</th>
            <th>Tipo</th>
            <th>Numero de Paginas</th>
            <th>Numero Vendidos</th>
            <th>Codigo Sucursal</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($revistas as $revi)
        <tr>
            <td class="v-align-middle">{{$revi->numero_de_registro}}</td>
            <td class="v-align-middle">{{$revi->titulo}}</td>
            <td class="v-align-middle">{{$revi->periocidad}}</td>
            <td class="v-align-middle">{{$revi->tipo}}</td>
            <td class="v-align-middle">{{$revi->numero_paginas}}</td>
            <td class="v-align-middle">{{$revi->numero_vendidos}}</td>
            <td class="v-align-middle">{{$revi->sucursal[0]->codigo}}</td>
            <td class="v-align-middle">
 
                <form action="{{ route('admin/revistas/eliminar',$revi->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return confirmarEliminar()">
 
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <a href="{{ route('admin/revistas/actualizar',$revi->id) }}" class="btn btn-primary">Editar</a>
 
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