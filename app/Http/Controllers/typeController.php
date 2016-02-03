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

      public function store(Request $request)
    {
        // Validate the request...

        $type= new cms_types;

        $type->titulo = $request->title;

        $type->save();
    }

    public function section()
    {
    	return view('section');

    }
}
