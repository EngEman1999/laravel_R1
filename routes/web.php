<?php

use Illuminate\Support\Facades\Route;

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


/*
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

