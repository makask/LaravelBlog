<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicController;
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

Route::get('/',[PublicController::class, 'home'])->name('home');
Route::get('/posts',[PublicController::class, 'posts']);
Route::get('/admin/posts', [PostController::class,'index'])->name('admin.posts.index');
Route::get('/admin/posts/create',[PostController::class,'create'])->name('admin.posts.create');
Route::post('/admin/posts',[PostController::class,'store'])->name('admin.posts.store');
Route::get('/admin/posts/{post}/edit',[PostController::class,'edit'])->name('admin.posts.edit');
Route::put('/admin/posts/{post}',[PostController::class,'update'])->name('admin.posts.update');
Route::get('/admin/posts/{post}/show',[PostController::class,'show'])->name('admin.posts.show');
Route::delete('/admin/posts/{post}',[PostController::class,'destroy'])->name('admin.posts.destroy');

