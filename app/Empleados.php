<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    //
    // Instancio la tabla 'empleados' 
     protected $table = 'empleados';
    
     // Declaro los campos que usaré de la tabla 'jugos' 
     protected $fillable = ['identificacion', 'telefono', 'sucursal_id'];
     
    public function sucursal()
    {
        return $this->hasMany('App\Sucursales','id');
    }
}
