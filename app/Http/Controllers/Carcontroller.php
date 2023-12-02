<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseIsRedirected;

class Carcontroller extends Controller
{
    private $columns = ['cartitle','description','published'];

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
       /* $cars =  new Car();
        $cars ->cartitle = $request->cartitle;
        $cars ->price = $request->price;
        $cars ->description = $request->description;
        if(isset($request->Published)){
            $cars ->Published = true;
        }else{
            $cars ->Published = false;
        }
        $cars -> save();
        return 'Added Successfully';*/
        $request->validate([
            'cartitle'=>'required|string|max:50',
            'description'=>'required|string',
        ]);

        $data = $request->only($this->columns);
        $data['published'] = isset($data['published'])? true : false;

        Car::create($data);
        return 'done';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      
        $cars = Car::findOrFail($id);
        return view('showcar', compact('cars'));
    
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
        $data = $request->only($this->columns);
        $data['published'] = isset($data['published'])? true:false;

        Car::where('id', $id)->update($data);

        return redirect('cars');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car::where('id', $id)->delete();
        return 'deleted';

    }
    public function trashed(){
        $cars = Car::onlyTrashed()->get();
        return view('trashed', compact('cars'));
    }

    public function restore(string $id): RedirectResponse
    {
        Car::where('id', $id)->restore();
        return redirect('cars');
    }
}
