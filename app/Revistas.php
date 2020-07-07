<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revistas extends Model
{
    //
    // Instancio la tabla 'empleados' 
     protected $table = 'revistas';
    
     // Declaro los campos que usaré de la tabla 'jugos' 
     protected $fillable = ['numero_de_registro', 'titulo', 'periocidad','tipo','numero_paginas','numero_vendidos','sucursal_id'];
     
    public function sucursal()
    {
        return $this->hasMany('App\Sucursales','id');
    }
}
