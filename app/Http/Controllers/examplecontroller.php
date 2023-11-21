<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class examplecontroller extends Controller
{
    public function test1(){
        return view('login');
        }

    public function addCar(){
    return view('addCar');
    }


    public function cars(Request $request){
     return'added car in db as' . $request['cartitle']; //or $request->cartitle;
    }
}
