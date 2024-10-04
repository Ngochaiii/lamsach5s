<?php

use App\Http\Controllers\Backend\AuthenticationController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\BlogServicesController;
use App\Http\Controllers\Backend\CustomerRequestController as BackendCustomerRequestController;
use App\Http\Controllers\FrontEnd\CustomerRequestController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\TypeController;
use App\Http\Controllers\FrontEnd\ContactController;
use App\Http\Controllers\Frontend\ContactRequestController;
use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\FrontEnd\Postcontroller as FrontEndPostcontroller;
use App\Http\Controllers\Backend\SiteConfigController;
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
Route::post('/contact', [ContactRequestController::class, 'store'])->name('contact.store');
Route::get('/tuyen-dung', [FrontEndPostcontroller::class, 'recruitmentPosts'])->name('recruitment.list');
Route::get('/search', [PostController::class, 'search'])->name('search');
Route::get('/gioi-thieu', [FrontEndPostcontroller::class, 'introduce'])->name('introduce');
Route::get('/cam-ket-dich-vu-5s', [FrontEndPostcontroller::class, 'commitment'])->name('commitment');




// Authentication routes
Route::get('/login', [AuthenticationController::class, 'index'])->name('login');
Route::post('/login', [AuthenticationController::class, 'login']);
Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');


    //post
    Route::get('/post', [PostController::class, 'index'])->name('admin.post');
    Route::post('/add', [PostController::class, 'store'])->name('admin.post.add');


    // type
    Route::get('/type', [TypeController::class, 'index'])->name('admin.type');
    Route::post('/type-add', [TypeController::class, 'store'])->name('admin.type.add');

    //contact
    Route::get('/contact', [BackendCustomerRequestController::class, 'index'])->name('admin.custommer');

    //config
    Route::get('/site-config', [SiteConfigController::class, 'edit'])->name('admin.site-config.edit');
    Route::put('/site-config', [SiteConfigController::class, 'update'])->name('admin.site-config.update');

    Route::get('/banner', [BannerController::class, 'index'])->name('banners.index');

    // banner
    Route::get('/banner/create', [BannerController::class, 'create'])->name('banners.create');
    Route::post('/banner', [BannerController::class, 'store'])->name('banners.store');
    Route::get('/banner/{banner}', [BannerController::class, 'show'])->name('banners.show');
    Route::get('/banner/{banner}/edit', [BannerController::class, 'edit'])->name('banners.edit');
    Route::put('/banner/{banner}', [BannerController::class, 'update'])->name('banners.update');
    Route::delete('/banner/{banner}', [BannerController::class, 'destroy'])->name('banners.destroy');

    // List all blog services
    Route::get('/blog-services', [BlogServicesController::class, 'index'])->name('blog-services.index');
    Route::get('/blog-services/create', [BlogServicesController::class, 'create'])->name('blog-services.create');
    Route::post('/blog-services', [BlogServicesController::class, 'store'])->name('blog-services.store');
    Route::get('/blog-services/{blog_service}', [BlogServicesController::class, 'show'])->name('blog-services.show');
    Route::get('/blog-services/{blog_service}/edit', [BlogServicesController::class, 'edit'])->name('blog-services.edit');
    Route::put('/blog-services/{blog_service}', [BlogServicesController::class, 'update'])->name('blog-services.update');
    Route::delete('/blog-services/{blog_service}', [BlogServicesController::class, 'destroy'])->name('blog-services.destroy');
});



Route::get('/{slug}', [FrontEndPostcontroller::class, 'index'])->name('post.detail');
Route::get('/Blog-lam-sach/{type}', [FrontEndPostcontroller::class, 'list'])->name('category.list');
