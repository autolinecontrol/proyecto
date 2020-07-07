<div class="row">
    <div class="col-md-12">
        <section class="panel"> 
            <div class="panel-body">
 
@if ( !empty ( $empleados->id) )
    <div class="form-group">
        <label for="identificacion" class="negrita">Identificacion:</label> 
        <div>
            <input class="form-control" placeholder="Identificacion" required="required" name="identificacion" type="text" id="identificacion" value="{{ $empleados->identificacion }}"> 
        </div>
    </div>
 
    <div class="form-group">
        <label for="telefono" class="negrita">Telefono:</label> 
        <div>
            <input class="form-control" placeholder="telefono" required="required" name="telefono" type="text" id="domicilio" value="{{ $empleados->telefono }}"> 
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
        <label for="identificacion" class="negrita">Identificacion:</label> 
        <div>
            <input class="form-control" placeholder="identificacion" required="required" name="identificacion" type="text" id="identificacion"> 
        </div>
    </div>
 
    <div class="form-group">
        <label for="telefono" class="negrita">Telefono:</label> 
        <div>
            <input class="form-control" placeholder="Telefono" required="required" name="telefono" type="text" id="telefono"> 
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
<a href="{{ route('admin/empleados') }}" class="btn btn-warning">Cancelar</a>

 <br>
 <br> 
            </div>
        </section>
    </div>
</div>