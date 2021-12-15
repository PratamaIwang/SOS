<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\krjgController;
use App\Http\Controllers\pesananController;
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



//user
Route::post('/register',[UserController::class,'register'])->name('register');
Route::post('/login',[UserController::class,'login'])->name('login');
Route::post('/logout',[UserController::class,'signout'])->name('signout');
Route::get('/signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('login',function(){
    return view('login');
});
Route::get('register',function(){
    return view('register');
});
Route::get('addmenu',function(){
    return view('addMenu');
});
Route::get('menu',[MenuController::class, 'getMenu'],function(){
    return view('menu');
});
Route::get('keranjang',[krjgController::class,'getCart'],function(){
    return view('keranjang');
});

//menu
Route::get('/', function () {
    return view('dashboard');
});

Route::post('/addmenu',[MenuController::class, 'tambahMenu']) -> name('tambahMenu');
Route::post('/addcart',[MenuController::class, 'addCart']) -> name('addcart');
Route::post('/menu/destroy',[MenuController::class, 'destroyMenu'])-> name('hapus');
//Route::get('/addmenu',function(){
//    return view('addmenu');
//});
Route::post('/krjg',[pesananController::class, 'setPesanan'])->name('krjg');
Route::get('/med',[MenuController::class, 'getMenu']) -> name('getMenu');