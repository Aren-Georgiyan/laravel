<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\InformationController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get("/users", [UsersController::class, 'index'])->name('users');
    Route::delete('/users/{id}',[UsersController::class, 'destroy'])->name('users.destroy');
    Route::get('/users/{id}',[UsersController::class, 'edit'])->name('user.edit');
    Route::patch('/users/{id}', [UsersController::class,'update'])->name('update.edit');
    
    Route::get('/products',[ProductsController::class,'index'])->name('products');
    Route::get('/create',[ProductsController::class,'create'])->name('create.index');
    Route::post('/store',[ProductsController::class,'store'])->name('store.index');
    Route::delete('/products/{id}',[ProductsController::class,'destroy'])->name('destroy.index');
    Route::get('/products/{id}',[ProductsController::class,'edit'])->name('edit.index');
    Route::patch('/products/{id}',[ProductsController::class,'update'])->name('update.index');
    
    Route::get('/information',[InformationController::class,'information'])->name('information');
//    Route::get('/information',[InformationController::class,'create'])->name('create.info');
    
});


require __DIR__.'/auth.php';
