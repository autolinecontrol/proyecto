<div class="row">
    <div class="col-md-12">
        <section class="panel"> 
            <div class="panel-body">
 
@if ( !empty ( $revistas->id) )
    <div class="form-group">
        <label for="numero_de_registro" class="negrita">No. Registro:</label> 
        <div>
            <input class="form-control" placeholder="No. Registro" required="required" name="numero_de_registro" type="text" id="numero_de_registro" value="{{ $revistas->numero_de_registro }}"> 
        </div>
    </div>
    <div class="form-group">
        <label for="titulo" class="negrita">Titulo:</label> 
        <div>
            <input class="form-control" placeholder="Titulo" required="required" name="titulo" type="text" id="titulo" value="{{ $revistas->titulo }}"> 
        </div>
    </div>
    <div class="form-group">
        <label for="periocidad" class="negrita">Periocidad:</label> 
        <div>
            <input class="form-control" placeholder="Periocidad" required="required" name="periocidad" type="text" id="periocidad" value="{{ $revistas->periocidad }}"> 
        </div>
    </div>
    <div class="form-group">
        <label for="tipo" class="negrita">Tipo:</label> 
        <div>
            <input class="form-control" placeholder="Tipo" required="required" name="tipo" type="text" id="tipo" value="{{ $revistas->tipo }}"> 
        </div>
    </div>

    <div class="form-group">
        <label for="numero_paginas" class="negrita">Numero de Paginas:</label> 
        <div>
            <input class="form-control" placeholder="Numero de Paginas" required="required" name="numero_paginas" type="text" id="numero_paginas" value="{{ $revistas->numero_paginas }}"> 
        </div>
    </div>

    <div class="form-group">
        <label for="numero_ventas" class="negrita">Numero de Ventas:</label> 
        <div>
            <input class="form-control" placeholder="Numero de Ventas" required="required" name="numero_ventas" type="text" id="numero_ventas" value="{{ $revistas->numero_ventas }}"> 
        </div>
    </div>
    <div class="form-group">
        <label for="sucursal_id" class="negrita">Sucursal:</label> 
        <div>
            <select class="form-control"   name="sucursal_id" id="sucursal_id"> 
            @foreach($sucursales as $suc) 
            <option value="{{$suc->id}}">{{$suc->codigo}} </option>
            @endforeach
            </select>
        </div>
    </div>
@else
<div class="form-group">
        <label for="numero_de_registro" class="negrita">No. Registro:</label> 
        <div>
            <input class="form-control" placeholder="No. Registro" required="required" name="numero_de_registro" type="text" id="numero_de_registro" > 
        </div>
    </div>
    <div class="form-group">
        <label for="titulo" class="negrita">Titulo:</label> 
        <div>
            <input class="form-control" placeholder="Titulo" required="required" name="titulo" type="text" id="titulo"> 
        </div>
    </div>
    <div class="form-group">
        <label for="periocidad" class="negrita">Periocidad:</label> 
        <div>
            <input class="form-control" placeholder="Periocidad" required="required" name="periocidad" type="text" id="periocidad" > 
        </div>
    </div>
    <div class="form-group">
        <label for="tipo" class="negrita">Tipo:</label> 
        <div>
            <input class="form-control" placeholder="Tipo" required="required" name="tipo" type="text" id="tipo">
    </div>

    <div class="form-group">
        <label for="numero_paginas" class="negrita">Numero de Paginas:</label> 
        <div>
            <input class="form-control" placeholder="Numero de Paginas" required="required" name="numero_paginas" type="text" id="numero_paginas" > 
        </div>
    </div>

    <div class="form-group">
        <label for="numero_vendidos" class="negrita">Numero de Ventas:</label> 
        <div>
            <input class="form-control" placeholder="Numero de Ventas" required="required" name="numero_vendidos" type="text" id="numero_vendidos"> 
        </div>
    </div>
    <div class="form-group">
        <label for="sucursal_id" class="negrita">Sucursal:</label> 
        <div>
            <select class="form-control"   name="sucursal_id" id="sucursal_id"> 
            @foreach($sucursales as $suc) 
            <option value="{{$suc->id}}">{{$suc->codigo}} </option>
            @endforeach
            </select>
        </div>
    </div>
@endif
<button type="submit" class="btn btn-info">Guardar</button>
<a href="{{ route('admin/revistas') }}" class="btn btn-warning">Cancelar</a>

 <br>
 <br> 
            </div>
        </section>
    </div>
</div>