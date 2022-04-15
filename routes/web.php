<?php
namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[BaseController::class,'home']);
Route::get('/shop',[BaseController::class,'shop']);
Route::get('/blog',[BaseController::class,'blog']);
Route::get('/productDetails',[BaseController::class,'productDetails']);
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
    // Route::get("/Product/store/{id}",[ProductsController::class ,'store']);
    // Route::get("/Product",[ProductsController::class ,'index']);
    // Route::get('/Product/editProduct/{id}',[ProductController::class,'edit']);
    // Route::get('/Product/{id}/delete',[ProductController::class,'destroy']);
    Route::resource('/Category',CategoryController::class);


});
