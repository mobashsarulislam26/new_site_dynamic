<?php
namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductCoverController;
use App\Http\Controllers\SliderController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[BaseController::class,'home']);
Route::get('/shop',[BaseController::class,'shop']);
Route::get('/blog',[BaseController::class,'blog']);
// Route::get('/productDetails',[BaseController::class,'productDetails']);
Route::get('/productDetails/{id}', [BaseController::class, 'productDetails'])->name('proDetails');
Route::get('/page',[BaseController::class,'page']);
Route::get('/about',[BaseController::class,'about']);
Route::get('/contact',[BaseController::class,'contact']);
Route::get('/admin',[adminController::class,'index'])->name('login');
Route::post('/admin',[adminController::class,'makeLogin']);
Route::post('/logout',[adminController::class,'logout']);
Route::group(['middleware'=>'auth:admin'],function(){
    Route::get('/admin/dashboard',[adminController::class,'dashboard']);
    Route::resource("/Logo",LogoController::class);
    Route::resource("/Product",ProductController::class);
    Route::resource('/Category',CategoryController::class);
    Route::resource('/slider',SliderController::class);
    Route::resource('/cover',ProductCoverController::class);
    
});
