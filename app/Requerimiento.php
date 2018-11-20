<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requerimiento extends Model
{
    protected $fillable = ['cliente', 'requerimiento', 'fecha_ingreso', 'estado'];
}
