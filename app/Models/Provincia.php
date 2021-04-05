<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    //use HasFactory;
    protected $table = 'provincias';// especifica el nombre de la tabla, generalmete va en singular
    protected $fillable = ['nombre','pais_id','habilitado'];//habilita campos para poblar en el create
   
    public function pais(){
        return  $this->belongsTo('App\Models\Pais');//relaciona provincia con pais
    }
}
