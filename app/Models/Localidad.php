<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
   //use HasFactory;
   protected $table = 'localidades';
   protected $fillable = ['nombre','provincia_id','habilitado'];//habilita campos para poblar en el create
  
   public function provincia(){
       return  $this->belongsTo('App\Models\Provincia');//relaciona localidad con provincia
   }
   
   /*public function pais(){
    return  $this->hasOneThrough('App\Models\Pais', 'App\Models\Provincia' );//relaciona provincia con pais
}*/
}
