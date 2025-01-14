<?php


use Illuminate\Support\Facades\Route;

  
Route::get('test/show',  [App\Http\Controllers\link::class,'show']); 

Route::get('test/show2',  [App\Http\Controllers\cycle::class,'show2']); 

Route::get('/page/',  [App\Http\Controllers\link::class,'showone']); 

Route::get('/page/{cat}',  [App\Http\Controllers\prod::class,'showcat']);

Route::get('/page/{cat}/{prod}',  [App\Http\Controllers\prod::class,'showprod']);

Route::get('/form/{q}/{r}',  [App\Http\Controllers\proform::class,'result']);

Route::post('/form/r',  [App\Http\Controllers\proform::class,'form']);

Route::get('/test/method/{}',  [App\Http\Controllers\proform::class,'method']);

Route::get('/sess',  [App\Http\Controllers\session::class,'get']);

Route::get('/test/red',  [App\Http\Controllers\redirect::class,'form']);

Route::get('/test/acc',  [App\Http\Controllers\redirect::class,'good']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/catalog', [App\Http\Controllers\HomeController::class, 'base']);
Route::get('/describe/{id}', [App\Http\Controllers\HomeController::class, 'desc']);


