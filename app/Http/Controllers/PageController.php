<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Codificacion Dani
use App\Models\Auto;

//Codificacion Dani
class PageController extends Controller
{
    public function autos()
    {
        $posts['autos']=Auto::paginate(5);
        return view('catalogo',$posts);
    }
}

