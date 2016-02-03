<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cms_type extends Model
{
    protected $table='cms_types'

    public function NuevoTipe()
    {


    	$type = new cms_types;

    	$type->titulo = input::get('title');
    	$type->description= input::get('descripcion');

    	$type->save();
    }
}
