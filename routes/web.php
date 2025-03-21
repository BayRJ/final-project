<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::middleware('guest')->controller(AuthController::class)->group(function () {
    Route::get('/register',  'showRegister')->name('show.register');
    Route::get('/login', 'showLogin')->name('show.login');
    Route::post('/register', 'register')->name('register');
    Route::post('/login', 'login')->name('login');
});


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::resource('/products', ProductController::class)->middleware('auth');



// //Protected routes if not authenticated
// Route::middleware('auth')->controller(ProductController::class)->group(function(){
//     //BEFORE: Route::get('ninjas,[NinjaController::class,'index'])->name(''ninjas.index)
//     //AFTER: Route::get('/ninjas','index')->name('ninjas.index');
//     Route::resource()

// });