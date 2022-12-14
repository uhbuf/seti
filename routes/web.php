<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistrController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});


Route::name('user.')->group(function(){
    Route::view('/private', 'private')->middleware('auth')->name('private');
    Route::get('/login',function(){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('login');
    })->name('login');

    Route::get('/logout',function(){
        Auth::logout();
        return redirect('/');
    })->name('logout');

    Route::post('/login',[LoginController::class,'login']);

    Route::get('/registration',function(){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('registration');
    })->name('registration');
    Route::post('/registration',[RegistrController::class,'save']);
});
Route::get('/catalog',[ProductController::class,'getProducts']);

Route::get('/basket',[BasketController::class,'index']);
Route::post('/basket/add/{id}', [BasketController::class,'add'])->where('id', '[0-9]+')->name('basket.add');
Route::post('/basket/minus/{id}', [BasketController::class,'minus'])->where('id', '[0-9]+')->name('basket.minus');
Route::post('/basket/plus/{id}', [BasketController::class,'plus'])->where('id', '[0-9]+')->name('basket.plus');
Route::post('/basket/remove/{id}', [BasketController::class,'remove'])->where('id', '[0-9]+')->name('basket.remove');

Route::post('/admin/delete/{id}',[AdminController::class,'delete'])->where('id','[0-9]+')->name('admin.delete');
Route::post('/admin/index/{id}/{action}',[AdminController::class,'index'])->where('id','[0-9]+')->name('admin.index');
Route::post('/admin/change/{id}',[AdminController::class,'change'])->where('id','[0-9]+')->name('admin.change');
Route::post('/admin/add/',[AdminController::class,'new'])->name('admin.new');