<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursales extends Model
{
     
     
     // Instancio la tabla 'sucursales' 
     protected $table = 'sucursales';
    
     // Declaro los campos que usaré de la tabla 'jugos' 
     protected $fillable = ['codigo', 'domicilio', 'telefono'];
     public function empleados()
     {
        return $this->belongsTo('App\Empleados','id_empleados');
    }
    public function periodistas()
    {
        return $this->belongsTo('App\Periodistas','id_periodistas');
    }
    public function revistas()
    {
        return $this->belongsTo('App\Revistas','id_revistas');
    }

     
}
