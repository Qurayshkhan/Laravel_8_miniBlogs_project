<?php

use App\Http\Controllers\dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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

Route::get('/',[dashboard::class,'home_post'])->name('welcome');
Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard',[dashboard::class,'show_post'])->name('dashboard');
    Route::get('/post',[PostController::class,'index'])->middleware('can:isAdmin','App\Model\Post')->name('post_index');
    Route::put('/post',[PostController::class,'create'])->name('create');  
    Route::get('/post/edit/{id}',[PostController::class,'edit'])->name('editpost');  
    Route::post('/post/edit/{id}',[PostController::class,'update'])->name('updatepost');  
    Route::get('delete/{id}',[PostController::class,'destroy'])->name('delete');  
    Route::post('delete/{id}',[PostController::class,'destroy'])->name('delete');  
});
require __DIR__.'/auth.php';
