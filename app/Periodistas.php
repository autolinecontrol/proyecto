<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodistas extends Model
{
    //
    // Instancio la tabla 'periodistas' 
     protected $table = 'periodistas';
    
     // Declaro los campos que usaré de la tabla 'jugos' 
     protected $fillable = ['identificacion', 'telefono', 'especialidad', 'sucursal_id'];
     
    public function sucursal()
    {
        return $this->hasMany('App\Sucursales','id');
    }
}
