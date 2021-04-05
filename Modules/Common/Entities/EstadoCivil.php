<?php

namespace Modules\Common\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EstadoCivil extends Model
{
    use HasFactory;

    protected $table = 'common.estado_civiles';
    protected $fillable = ["nombre","habilitado"];
    
    protected static function newFactory()
    {
        return \Modules\Common\Database\factories\EstadoCivilFactory::new();
    }
}
