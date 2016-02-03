<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class typeController extends Controller
{
   public function type()
    {
    	return view('type');
    }

    public function section()
    {
    	return view('section');
    }

 public function NuevoTipe()
    {


    	$type = new cms_types;

    	$type->titulo = input::get('title');
    	$type->description= input::get('descripcion');

    	$type->save();
    }
}
