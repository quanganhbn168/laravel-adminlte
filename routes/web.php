<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AccountController;

Route::post('/upload', [UploadController::class, 'store'])->name('upload.store')->middleware('web');;
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::group(['prefix'=>'san-pham'], function(){
    Route::get('/', [ProductController::class,'allProduct'])->name('products.allProduct');
    Route::get('/danh-muc/{categories-slug}', [ProductController::class,'productByCate'])->name('products.productByCate');
    Route::get('/san-pham-1', [ProductController::class,'detail'])->name('products.detail');
});
Route::group(['prefix'=>'tin-tuc'], function(){
    Route::get('/', [PostController::class,'postByCate'])->name('postByCategories');
    Route::get('/bai-viet-so-1', [PostController::class,'detail'])->name('postByCategories');
});
Route::group(['prefix'=>'account'], function(){
    Route::get('/login',[AccountController::class,'login'])->name('account.getLogin');
    Route::post('/login',[AccountController::class,'login'])->name('account.login');
    Route::get('/myDashboard',[AccountController::class,'myDashboard'])->name('account.myDashboard');
    Route::get('/myFavorite',[AccountController::class,'myFavorite'])->name('account.myFavorite');
    Route::get('/myOrder',[AccountController::class,'myOrder'])->name('account.myOrder');
    Route::get('/myProfile',[AccountController::class,'myProfile'])->name('account.myProfile');
});
require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
