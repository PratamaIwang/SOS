<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;
/*
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



Route::get('/ahmed',function(){
    return view('ahmed');
});
//user
Route::post('/register',[UserController::class,'register'])->name('register');
Route::post('/login',[UserController::class,'login'])->name('login');
Route::post('/logout',[UserController::class,'signout'])->name('signout');
Route::get('/signout', [CustomAuthController::class, 'signOut'])->name('signout');


//menu
Route::get('/', function () {
    return view('welcome');
});

Route::post('/addmenu',[MenuController::class, 'tambahMenu']) -> name('tambahMenu');
Route::post('/menu/destroy',[MenuController::class, 'destroyMenu'])-> name('hapus');
//Route::get('/addmenu',function(){
//    return view('addmenu');
//});