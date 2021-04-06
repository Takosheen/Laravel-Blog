<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Posts;

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

Route::get('post', Posts::class);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts',[\App\Http\Controllers\PostsController::class,'index'])->name('public_posts_index');
Route::get('/posts/{id}',[\App\Http\Controllers\PostsController::class,'show'])->name('public_posts_show');
Route::get('/page',[\App\Http\Controllers\PageController::class,'index'])->name('public_page_index');
Route::get('/page/{id}',[\App\Http\Controllers\PageController::class,'show'])->name('public_page_show');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
