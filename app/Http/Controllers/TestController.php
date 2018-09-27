<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //Método
    public function welcome(){
        return view ('welcome'); /*
        $c = 12;
        return "el valor de c es $c";*/
    }
}
