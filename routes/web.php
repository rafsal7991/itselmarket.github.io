<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use  App\Http\Controllers\UsersController;
use  App\Http\Controllers\productsController;
use  App\Http\Controllers\marketController;

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

Route::get('/', function () {
    return view('other/welcom');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('other/welcome',function (){
    return view('welcome');
});
Route::get('about',function (){
    return view('other/about');
});
Route::get('addproducts',function (){
    return view('other/addproducts');
});
Route::get('addmarket',function (){
    return view('other/addmarket');
});
Route::get('myproducts',function (){
    return view('other/myproducts');
});
Route::get('notification',function (){
    return view('notification');
});

Route::get('register',[UserController::class, 'index']);
Route::get('login',[UserController::class, 'log_in']);
Route::get('/users',[UsersController::class, 'admin']);
Route::get('/products',[productsController::class, 'myproducts']);
Route::get('/myproducts',[productsController::class, 'index']);
Route::get('/markets',[marketController::class, 'index']);
Route::get('userlist',[productsController::class, 'userlist']);
Route::get('makeproduct',[productsController::class, 'insert']);
Route::get('makemarket',[marketController::class, 'insert']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/products',[productsController::class, 'index']);