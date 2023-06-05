<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\KonuController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('anasayfa',[\App\Http\Controllers\DashboardController::class,'index'])->name('anasayfa');

Route::middleware(['auth:sanctum', 'verified'])->get('/panel', function () {
    return view('dashboard');
})->name('dashboard');

    Route::group(['middleware' => ['auth','isAdmin'],'prefix'=>'admin',], function (){
        Route::get('Konu/{id}',[KonuController::class,'destroy'])->whereNumber('id')->name('Konu.destroy');
        Route::resource('Konu', KonuController::class);
});


