<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Empleados;
use App\Sucursales;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemCreateRequestE;
use App\Http\Requests\ItemUpdateRequestE;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Storage;

class EmpleadosController extends Controller
{
    //
    public function crear()
    {
        $empleados = Empleados::all();
        $sucursales = Sucursales::all();
        return view('admin.empleados.crear', compact('empleados','sucursales'));
    }
    public function store(ItemCreateRequestE $request)
    {
        // Instancio al modelo Jugos que hace llamado a la tabla 'jugos' de la Base de Datos
        $empleados = new Empleados; 
    
        // Recibo todos los datos del formulario de la vista 'crear.blade.php'
        $empleados->identificacion    = $request->identificacion;
        $empleados->telefono = $request->telefono;
        $empleados->sucursal_id  = $request->sucursal_id;
        
        // Inserto todos los datos en mi tabla 'jugos' 
        $empleados->save();
    
        // Hago una redirección a la vista principal con un mensaje 
        return redirect('admin/empleados')->with('message','Guardado Satisfactoriamente !');
    }
    public function index()
    {
        $empleados = Empleados::all();
        $sucursales = Sucursales::with('empleados')->first();
        return view('admin.empleados.index', compact('empleados','sucursales')); 
    }
    public function actualizar($id)
    {
        $empleados = Empleados::find($id);
        $sucursales = Sucursales::all();
        return view('admin/empleados.actualizar',['empleados'=>$empleados],['sucursales'=>$sucursales]);
    }
    // Proceso de Actualización de un Registro (Update)
 
    public function update(ItemUpdateRequestE $request, $id)
    {        
        // Recibo todos los datos desde el formulario Actualizar
        $empleados = Empleados::find($id);
        $empleados->identificacion    = $request->identificacion;
        $empleados->telefono = $request->telefono;
        $empleados->sucursal_id  = $request->sucursal_id;
        
        // Actualizo los datos en la tabla 'jugos'
        $empleados->save();
    
        // Muestro un mensaje y redirecciono a la vista principal 
        Session::flash('message', 'Editado Satisfactoriamente !');
        return Redirect::to('admin/empleados');
    }
    public function eliminar($id)
    {
        // Indicamos el 'id' del registro que se va Eliminar
        $empleados = Empleados::find($id);        
        // Elimino el registro de la tabla 'jugos' 
        Empleados::destroy($id);
            
        // Muestro un mensaje y redirecciono a la vista principal 
        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/empleados');
    }
}
