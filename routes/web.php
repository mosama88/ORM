<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\POSTController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('posts', POSTController::class);
    Route::resource('comments', CommentController::class);


    
    Route::get('colors/index',[ColorController::class,'index'])->name('colors.index');
    Route::get('colors/create',[ColorController::class,'create'])->name('colors.create');
    Route::get('colors/edit/{id}',[ColorController::class,'edit'])->name('colors.edit');
    Route::delete('colors/destroy/{id}',[ColorController::class,'destroy'])->name('colors.destroy');
    Route::post('colors',[ColorController::class,'save'])->name('colors.save');
    Route::put('colors/update/{id}', [ColorController::class, 'update'])->name('colors.update');



    Route::get('size/index',[SizeController::class,'index'])->name('sizes.index');
    Route::get('size/create',[SizeController::class,'create'])->name('sizes.create');
    Route::post('size/store',[SizeController::class,'save'])->name('sizes.save');
    Route::get('size/edit/{id}',[SizeController::class,'edit'])->name('sizes.edit');
    Route::put('size/update/{id}',[SizeController::class,'update'])->name('sizes.update');
    Route::delete('size/destroy/{id}',[SizeController::class,'destroy'])->name('sizes.destroy');
});


require __DIR__ . '/auth.php';
Route::get('/{page}', [PageController::class, 'home']);