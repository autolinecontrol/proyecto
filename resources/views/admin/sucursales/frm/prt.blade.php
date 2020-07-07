<div class="row">
    <div class="col-md-12">
        <section class="panel"> 
            <div class="panel-body">
 
@if ( !empty ( $sucursales->id) )
    <div class="form-group">
        <label for="nombre" class="negrita">Codigo:</label> 
        <div>
            <input class="form-control" placeholder="001" required="required" name="codigo" type="text" id="codigo" value="{{ $sucursales->codigo }}"> 
        </div>
    </div>
 
    <div class="form-group">
        <label for="domicilio" class="negrita">Domicilio:</label> 
        <div>
            <input class="form-control" placeholder="Cll # #-#" required="required" name="domicilio" type="text" id="domicilio" value="{{ $sucursales->domicilio }}"> 
        </div>
    </div>
 
    <div class="form-group">
        <label for="telefono" class="negrita">Telefono:</label> 
        <div>
            <input class="form-control" placeholder="300000000" required="required" name="telefono" type="text" id="telefono" value="{{ $sucursales->telefono }}"> 
        </div>
    </div>
@else
    <div class="form-group">
        <label for="codigo" class="negrita">Codigo:</label> 
        <div>
            <input class="form-control" placeholder="Codigo" required="required" name="codigo" type="text" id="codigo"> 
        </div>
    </div>
 
    <div class="form-group">
        <label for="domicilio" class="negrita">Domicilio:</label> 
        <div>
            <input class="form-control" placeholder="Cll # #-#" required="required" name="domicilio" type="text" id="domicilio"> 
        </div>
    </div>
 
    <div class="form-group">
        <label for="telefono" class="negrita">Telefono:</label> 
        <div>
            <input class="form-control" placeholder="300000000" required="required" name="telefono" type="text" id="telefono"> 
        </div>
    </div>
@endif
<button type="submit" class="btn btn-info">Guardar</button>
<a href="{{ route('admin/sucursales') }}" class="btn btn-warning">Cancelar</a>

 <br>
 <br> 
            </div>
        </section>
    </div>
</div>