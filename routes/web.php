<?php

use App\Http\Controllers\Backend\AuthenticationController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\TypeController;
use App\Http\Controllers\FrontEnd\ContactController;
use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\FrontEnd\Postcontroller as FrontEndPostcontroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/lien-he', [ContactController::class, 'index'])->name('contact');



// Authentication routes
Route::get('/login', [AuthenticationController::class, 'index'])->name('login');
Route::post('/login', [AuthenticationController::class, 'login']);
Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');



Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //post
    Route::get('/post', [PostController::class, 'index'])->name('admin.post');
    Route::post('/add', [PostController::class, 'store'])->name('admin.post.add');


    // type
    Route::get('/type', [TypeController::class, 'index'])->name('admin.type');
    Route::post('/type-add', [TypeController::class, 'store'])->name('admin.type.add');
});

Route::get('/{slug}', [FrontEndPostcontroller::class, 'index'])->name('post.detail');
Route::get('/category/{type}', [FrontEndPostcontroller::class, 'list'])->name('category.list');
