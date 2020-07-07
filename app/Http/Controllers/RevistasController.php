<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Revistas;
use App\Sucursales;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemCreateRequestR;
use App\Http\Requests\ItemUpdateRequestR;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Storage;

class RevistasController extends Controller
{
    //
    public function crear()
    {
        $revistas = Revistas::all();
        $sucursales = Sucursales::all();
        return view('admin.revistas.crear', compact('revistas','sucursales'));
    }
    public function store(ItemCreateRequestR $request)
    {
        // Instancio al modelo Jugos que hace llamado a la tabla 'jugos' de la Base de Datos
        $revistas = new Revistas; 
    
        // Recibo todos los datos del formulario de la vista 'crear.blade.php'
        $revistas->numero_de_registro    = $request->numero_de_registro;
        $revistas->titulo = $request->titulo;
        $revistas->periocidad = $request->periocidad;
        $revistas->tipo = $request->tipo;
        $revistas->numero_paginas = $request->numero_paginas;
        $revistas->numero_vendidos = $request->numero_vendidos;
        $revistas->sucursal_id  = $request->sucursal_id;
        
        // Inserto todos los datos en mi tabla 'jugos' 
        $revistas->save();
    
        // Hago una redirección a la vista principal con un mensaje 
        return redirect('admin/revistas')->with('message','Guardado Satisfactoriamente !');
    }
    public function index()
    {
        $revistas = Revistas::all();
        $sucursales = Sucursales::with('revistas')->first();
        return view('admin.revistas.index', compact('revistas','sucursales')); 
    }
    public function actualizar($id)
    {
        $revistas = Revistas::find($id);
        $sucursales = Sucursales::all();
        return view('admin/revistas.actualizar',['revistas'=>$revistas],['sucursales'=>$sucursales]);
    }
    // Proceso de Actualización de un Registro (Update)
 
    public function update(ItemUpdateRequestR $request, $id)
    {        
        // Recibo todos los datos desde el formulario Actualizar
        $revistas = Revistas::find($id);
        $revistas->numero_de_registro    = $request->numero_de_registro;
        $revistas->titulo = $request->titulo;
        $revistas->periocidad = $request->periocidad;
        $revistas->tipo = $request->tipo;
        $revistas->numero_paginas = $request->numero_paginas;
        $revistas->numero_vendidos = $request->numero_vendidos;
        $revistas->sucursal_id  = $request->sucursal_id;
        
        // Actualizo los datos en la tabla 'jugos'
        $revistas->save();
    
        // Muestro un mensaje y redirecciono a la vista principal 
        Session::flash('message', 'Editado Satisfactoriamente !');
        return Redirect::to('admin/revistas');
    }
    public function eliminar($id)
    {
        // Indicamos el 'id' del registro que se va Eliminar
        $revistas = Revistas::find($id);        
        // Elimino el registro de la tabla 'jugos' 
        Revistas::destroy($id);
            
        // Muestro un mensaje y redirecciono a la vista principal 
        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/revistas');
    }
}
