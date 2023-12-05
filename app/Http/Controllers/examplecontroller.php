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
    public function showUpload(){
        return view('upload');
    }

    public function upload(Request $request){
        // $file_extension = $request->image->getClientOriginalExtension();
        // $file_name = time() . '.' . $file_extension;
        // $path = 'assets/images';
        // $request->image->move($path, $file_name);
        $h = $this->uploadFile($request->image, 'assets/images');
        return $h;
    }
    public function received(Request $request){
        $msg = "Your email is: " . $request->email . "<br> and Password is: " . $request->pwd;
        return $msg;
    }

    public function cars(Request $request){
     return'added car in db as' . $request['cartitle']; //or $request->cartitle;
    }
}
