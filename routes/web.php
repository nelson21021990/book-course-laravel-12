<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\PrimerControlador;
use App\Http\Controllers\SegundoControlador;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return View('welcome');
});


Route::group(['prefix' => 'dashboard'],function(){
    Route::resource('post', PostController::class);
    Route::resource('category', CategoryController::class);
    // Route::resources(
    //     [
    //         'post' => PostController::class,
    //         'category' => CategoryController::class,
    //     ]
    //     ); // Segunda forma de agrupar
});

//Route::get('test', [PrimerControlador::class,'index']);
//Route::resource('post', PrimerControlador::class); obtiene todos los recursos del crud
//Route::get('otro/{post}/{otro?}', [PrimerControlador::class,'otro']);






//Route::get('test2', [SegundoControlador::class,'index']);


//Route::get('/test',function(){
//return "Welcome";
//});


/*Route::get('/test', function () {
    return view('test');
})->name('test');


//Route::get('/crud', function () {
   // return view('crud/index');
//});

Route::get('/crud', function () {
    $age = 35;
    $data = ['name'=> 'Nelson', 'age'=>$age];
    return view('crud/index',$data);
})->name('crud');*/
//Route::get('/contact', function () {
    //return redirect('/contact2',303);
    
  //return redirect()->route('contact2');

  //return to_route('contact2');

    //return view('contact',['name'=>'Nelson']);
//})-> name('contact');

//Route::get('/contact2', function () {
    //return view('contact2');
//})-> name('contact2');

?>