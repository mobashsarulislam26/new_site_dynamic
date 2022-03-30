<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\adminController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[BaseController::class,'home']);
Route::get('/shop',[BaseController::class,'shop']);
Route::get('/blog',[BaseController::class,'blog']);
Route::get('/page',[BaseController::class,'page']);
Route::get('/about',[BaseController::class,'about']);
Route::get('/contact',[BaseController::class,'contact']);
Route::get('/admin',[adminController::class,'index']);
Route::post('/admin',[adminController::class,'makeLogin']);
