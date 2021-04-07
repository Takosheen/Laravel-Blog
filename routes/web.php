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
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/posts',[\App\Http\Controllers\PostsController::class,'index'])->name('public_post_index');
Route::get('/posts/{id}',[\App\Http\Controllers\PostsController::class,'show'])->name('public_posts_show');

Route::get('/pages/',[\App\Http\Controllers\PagesController::class, 'index'])->name('public_pages_index');
Route::get('/pages/{id}',[\App\Http\Controllers\PagesController::class, 'show'])->name('public_pages_show');

Route::get('post', Posts::class);
