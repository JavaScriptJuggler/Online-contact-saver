<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//view route
Route::get('/', function () {
    return view('register');
});
Route::get('/register',function(){
    return view('register');
});
Route::get('/login',function(){
    return view('login');
});
Route::get('/dashboard',function(){
    if(session()->has('userid')){
    return redirect('/mydashboard');
    }
    return redirect('/login');
});

//controller route
Route::post('/registercontroller',[AuthController::class,'registerController'] );
Route::post('/logincontroller',[AuthController::class,'loginController'] );
Route::get('/mydashboard',[ContactController::class,'display'] );
Route::post('/save',[ContactController::class,'save'] );
Route::get('/delete/{id}',[ContactController::class,'delete']);
Route::post('/update',[ContactController::class,'update'] );
