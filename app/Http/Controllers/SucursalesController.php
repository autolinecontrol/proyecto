<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Sucursales;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemCreateRequest;
use App\Http\Requests\ItemUpdateRequest;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Storage;

class SucursalesController extends Controller
{
    //
    public function crear()
    {
        $sucursales = Sucursales::all();
        return view('admin.sucursales.crear', compact('sucursales'));
    }
    public function store(ItemCreateRequest $request)
    {
        // Instancio al modelo Jugos que hace llamado a la tabla 'jugos' de la Base de Datos
        $sucursales = new Sucursales; 
    
        // Recibo todos los datos del formulario de la vista 'crear.blade.php'
        $sucursales->codigo    = $request->codigo;
        $sucursales->domicilio = $request->domicilio;
        $sucursales->telefono  = $request->telefono;
        
        // Inserto todos los datos en mi tabla 'jugos' 
        $sucursales->save();
    
        // Hago una redirección a la vista principal con un mensaje 
        return redirect('admin/sucursales')->with('message','Guardado Satisfactoriamente !');
    }
    public function index()
    {
        $sucursales = Sucursales::all();
        return view('admin.sucursales.index', compact('sucursales')); 
    }
    public function actualizar($id)
    {
        $sucursales = Sucursales::find($id);
        return view('admin/sucursales.actualizar',['sucursales'=>$sucursales]);
    }
    // Proceso de Actualización de un Registro (Update)
 
    public function update(ItemUpdateRequest $request, $id)
    {        
        // Recibo todos los datos desde el formulario Actualizar
        $sucursales = Sucursales::find($id);
        $sucursales->codigo    = $request->codigo;
        $sucursales->domicilio = $request->domicilio;
        $sucursales->telefono  = $request->telefono;
        
        // Actualizo los datos en la tabla 'jugos'
        $sucursales->save();
    
        // Muestro un mensaje y redirecciono a la vista principal 
        Session::flash('message', 'Editado Satisfactoriamente !');
        return Redirect::to('admin/sucursales');
    }
    public function eliminar($id)
    {
        // Indicamos el 'id' del registro que se va Eliminar
        $sucursales = Sucursales::find($id);        
        // Elimino el registro de la tabla 'jugos' 
        Sucursales::destroy($id);
            
        // Muestro un mensaje y redirecciono a la vista principal 
        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/sucursales');
    }
}
