<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;


class Carcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $car = Car::get();
        return view("Cars" , compact("car"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view("addCar");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cars =  new Car();
        $cars ->cartitle = $request->cartitle;
        $cars ->price = $request->price;
        $cars ->description = $request->description;
        if(isset($request->Published)){
            $cars ->Published = true;
        }else{
            $cars ->Published = false;
        }
        $cars -> save();
        return 'Added Successfully';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      
      //
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cars = Car::findOrFail($id);
        return view('editcar', compact('cars'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
