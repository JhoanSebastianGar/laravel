<?php

//solicitu o peticion
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//importamos el controlador 
use App\Http\Controllers\PageController;

Route::controller(PageController::class)->group(function(){
    Route::get('home','home')->name('home');
    Route::get('blog','blog')->name('blog');
    //Envio una variable 
    Route::get('blog/{post:slug}','post')->name('post');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';



/*
Route::get de consultar
Route::post guardar info
Route::delete eliminar
Route::put  Actualizar
*/
/*
Route::get('home', [PageController::class,'home'])->name('home');

Route::get('blog',[PageController::class,'blog'])->name('blog');


//Envio una variable 
Route::get('blog/{slug}',[PageController::class,'post'])->name('post');

//Envio una variable 
Route::get('buscar', function (Request $var) {
    return request()->all();
});
*/


