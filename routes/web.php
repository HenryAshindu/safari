<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\ShoeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shoes', [ShoeController::class, 'index']);
Route::get('/shop', [ShoeController::class, 'shop'])->name('shop');
Route::get('/about', [ShoeController::class, 'about']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');



Route::resource('shoes', ShoeController::class);



Route::middleware('guest')->group( function (){
    Route::get('/register', [RegisteredUserController::class,'create']);
    Route::post('/register', [RegisteredUserController::class,'store']);

    Route::get('/login', [SessionController::class,'create'])->name('login');
    Route::post('/login', [SessionController::class,'store'])->name('store');
});



Route::delete('/logout', [SessionController::class,'destroy'])->middleware('auth')->name('logout');