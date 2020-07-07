<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Periodistas;
use App\Sucursales;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemCreateRequestP;
use App\Http\Requests\ItemUpdateRequestP;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Storage;

class PeriodistasController extends Controller
{
    //
    public function crear()
    {
        $periodistas = Periodistas::all();
        $sucursales = Sucursales::all();
        return view('admin.periodistas.crear', compact('periodistas','sucursales'));
    }
    public function store(ItemCreateRequestP $request)
    {
        // Instancio al modelo Jugos que hace llamado a la tabla 'jugos' de la Base de Datos
        $periodistas = new Periodistas; 
    
        // Recibo todos los datos del formulario de la vista 'crear.blade.php'
        $periodistas->identificacion    = $request->identificacion;
        $periodistas->telefono = $request->telefono;
        $periodistas->especialidad = $request->especialidad;
        $periodistas->sucursal_id  = $request->sucursal_id;
        
        // Inserto todos los datos en mi tabla 'jugos' 
        $periodistas->save();
    
        // Hago una redirección a la vista principal con un mensaje 
        return redirect('admin/periodistas')->with('message','Guardado Satisfactoriamente !');
    }
    public function index()
    {
        $periodistas = Periodistas::all();
        $sucursales = Sucursales::with('periodistas')->first();
        return view('admin.periodistas.index', compact('periodistas','sucursales')); 
    }
    public function actualizar($id)
    {
        $periodistas = Periodistas::find($id);
        $sucursales = Sucursales::all();
        return view('admin/periodistas.actualizar',['periodistas'=>$periodistas],['sucursales'=>$sucursales]);
    }
    // Proceso de Actualización de un Registro (Update)
 
    public function update(ItemUpdateRequestP $request, $id)
    {        
        // Recibo todos los datos desde el formulario Actualizar
        $periodistas = Periodistas::find($id);
        $periodistas->identificacion    = $request->identificacion;
        $periodistas->telefono = $request->telefono;
        $periodistas->especialidad = $request->especialidad;
        $periodistas->sucursal_id  = $request->sucursal_id;
        
        // Actualizo los datos en la tabla 'jugos'
        $periodistas->save();
    
        // Muestro un mensaje y redirecciono a la vista principal 
        Session::flash('message', 'Editado Satisfactoriamente !');
        return Redirect::to('admin/periodistas');
    }
    public function eliminar($id)
    {
        // Indicamos el 'id' del registro que se va Eliminar
        $periodistas = Periodistas::find($id);        
        // Elimino el registro de la tabla 'jugos' 
        Periodistas::destroy($id);
            
        // Muestro un mensaje y redirecciono a la vista principal 
        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/periodistas');
    }
}
