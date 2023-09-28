<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\User\PostController as UserPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\LogMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'home.index')->name('home');


// Login
Route::get('/login', [ LoginController::class, 'index'] )->name('login');

Route::post('/login', [ LoginController::class, 'store'] )->name('login.store');

// Register
Route::get('/register', [ RegisterController::class, 'index'] )->name('register');

Route::post('/register', [ RegisterController::class, 'store'] )->name('register.store');

// User
Route::prefix('user')->group( function() {

    Route::get('posts', [ UserPostController::class, 'index' ])->name('user.posts');

    Route::get('posts/create', [ UserPostController::class, 'create' ])->name('user.posts.create');

    Route::post('posts', [ UserPostController::class, 'store' ])->name('user.posts.store');

    Route::get('posts/{post}', [ UserPostController::class, 'show' ])->name('user.posts.show');

    Route::get('posts/{post}/edit', [ UserPostController::class, 'edit' ])->name('user.posts.edit');

    Route::put('posts/{post}', [ UserPostController::class, 'update' ])->name('user.posts.update');

} );

// CRUD - create, read, update, delete

Route::get('/posts', [ PostController::class, 'index' ])->name('posts');

Route::get('/posts/{post}', [ PostController::class, 'show' ])->name('posts.show');

Route::get('/posts/create', [ PostController::class, 'create' ])->name('posts.create');

Route::post('/posts/{post}/edit', [ PostController::class, 'edit' ])->name('posts.edit');

Route::put('/posts/{post}', [ PostController::class, 'update' ])->name('posts.update');

Route::post('/posts/{post}', [ PostController::class, 'delete' ])->name('posts.delete');

Route::put('/posts/{post}/like', [ PostController::class, 'like' ])->name('posts.like');

// Comments

Route::resource('/posts/{post}/comments', CommentController::class)->only(['index', 'show']);