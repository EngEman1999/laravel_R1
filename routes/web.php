<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\examplecontroller;
use App\Http\Controllers\Carcontroller;
use App\Http\Controllers\NewController;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
  return view('welcome');
});
Route::get('/About', function () {
  return 'welcome , This is my first project in the laravel';
});
Route::get('/Contact us', function (){
  return 'You can contact us by phone : 011111111111';
});
Route::prefix('Support')->group(function () {
  Route::get('/', function(){
    return 'You can support us by : (Chat , Call , Ticket)';
  });
  Route::get('Chat', function(){
    return 'Chat';
  });
  Route::get('Call', function(){
    return 'Call';
  });
  Route::get('Ticket', function(){
    return 'Ticket';
  });
});
Route::prefix('Training')->group(function () {
  Route::get('/', function(){
    return 'Types of training we have : (HR , ICT , Marketing , Logistics)';
  });
  Route::get('HR', function(){
    return 'HR';
  });
  Route::get('ICT', function(){
    return 'ICT';
  });
  Route::get('Marketing', function(){
    return 'Marketing';
  });
  Route::get('Logistics', function(){
    return 'Logistics';
  });
});
// To go to the home page if there is an error in the link للتوجه للصفحة الرئيسية فى حالة وجود خطا فى اللينك
Route::fallback(function() {
  return redirect('/');
});
//To display a specific page in the views //لعرض صفحة معينة موجودة فى ال viewes 
Route::get('cv', function(){
  return view('cv');
});

Route::get('login', function(){
  return view('login');
});
  
Route::post('receive', function() {
  return 'data received';
  })->name('receive');

/*insertcar
Route::get('/user/{name}/{age?}', function ($name , $age=0) {
    $m = 'The username is: ' . $name;
    if($age > 0){
      $m .='and the age is:' . $age ;
    }
      return $m;
})->whereNumber('age');

Route::get('/user/{name}/{age?}', function ($name , $age=0) {
    $m = 'The username is: ' . $name;
    if($age > 0){
      $m .='and the age is:' . $age ;
    }
      return $m;
//})->whereAlpha('name');
})->where(['name'=>'[a-zA-Z0-9]+' ,'age'=>'[0-9]+', ]);
Route::get('/user/{name}/{age?}', function ($name , $age=0) {
    $m = 'The username is: ' . $name;
    if($age > 0){
      $m .='and the age is:' . $age ;
    }
      return $m;
//})->whereAlpha('name');
})->whereIn('name',['eman','basma']);
Route::prefix('product')->group(function () {
    Route::get('/', function(){
    return 'product home page';
    });
    Route::get('laptop', function(){
    return 'laptop page';
    });
    Route::get('camera', function(){
        return 'camera  page';
        });
        Route::get('pro', function(){
            return 'pro  page';
            });
        
    });
*/
Route::get('test1', [examplecontroller::class,'test1']);
//test3
/*
Route::get('addCar', [examplecontroller::class,'addCar']);
Route::post('cars', [examplecontroller::class,'cars'])->name('cars');
*/
Route::post('storecar', [Carcontroller::class,'store'])->name('storecar');
Route::get('addcar', [Carcontroller::class,'create']);
Route::get('cars', [Carcontroller::class,'index']);
Route::get('editcar/{id}', [Carcontroller::class,'edit'])->name('editcar');
Route::put("updatecar/{id}", [Carcontroller::class,"update"])->name('updatecar');

//task4
Route::post('storenews', [Newcontroller::class,'store'])->name('storenews');
Route::get('addnews', [Newcontroller::class,'create']);

