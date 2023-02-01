<?php
use App\Http\Middleware\CheckAdmin;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use  App\Http\Controllers\Adminpanel\AdminHomeController;
use App\Http\Controllers\Adminpanel\CategoryController;
use App\Http\Controllers\Adminpanel\ProductController;
use App\Http\Controllers\Adminpanel\BlogController;
use App\Http\Controllers\Adminpanel\MessageController;
use App\Http\Controllers\Adminpanel\AdminUserController;

use Illuminate\Support\Facades\Facade;
use Illuminate\support\Facades\Auth;
use Illuminate\Routing\Route as RoutingRoute;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;




// Route::middleware('admin')->group(function(){
Route::middleware('auth')->prefix('admin')->name('admin')->group(function () {
    Route::resource('/index',HomeController::class);
    Route ::view('/login','Admin.Login')->name('adminlogin');
    Route::get('/login', [HomeController::class, 'loginad']);
//   Route::resource('home',app\Http\Controllers\Adminpanel\AdminHomeController::class,'index');

Route::get('/', [AdminHomeController::class, 'index']);
Route::get('/settings', [AdminHomeController::class, 'setting']);
Route::post('/setting/update/{id}', [AdminHomeController::class, 'settingupdate']);









Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category/store', [CategoryController::class, 'store']);
Route::get('/category/show/{id}', [CategoryController::class, 'show']);
Route::get('/category/delete/{id}', [CategoryController::class, 'destroy']);
Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
Route::post('/category/update/{id}', [CategoryController::class, 'update']);









Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/create', [ProductController::class, 'create']);
Route::post('/product/store', [ProductController::class, 'store']);
Route::get('/product/show/{id}', [ProductController::class, 'show']);
Route::get('/product/delete/{id}', [ProductController::class, 'destroy']);
Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
Route::post('/product/update/{id}', [ProductController::class, 'update']);





Route::get('/blog', [BlogController::class, 'index']);

Route::get('/blog/create', [BlogController::class, 'create']);
Route::post('/blog/store', [BlogController::class, 'store']);
Route::get('/blog/show/{id}', [BlogController::class, 'show']);
Route::get('/blog/delete/{id}', [BlogController::class, 'destroy']);
Route::get('/blog/edit/{id}', [BlogController::class, 'edit']);
Route::post('/blog/update/{id}', [BlogController::class, 'update']);
Route ::view('/login','Admin.Login');
Route::post('/login', [HomeController::class, 'loginad']);




Route::get('/message', [MessageController::class, 'index']);



Route::get('/message/show/{id}', [MessageController::class, 'show']);
Route::get('/message/delete/{id}', [MessageController::class, 'destroy']);

Route::post('message/update/{id}', [MessageController::class, 'update']);




Route::get('/user', [AdminUserController::class, 'index']);
Route::get('/user/show/{id}', [AdminUserController::class, 'show']);
Route::get('/user/delete/{id}', [AdminUserController::class, 'destroy']);
Route::get('/user/edit/{id}', [AdminUserController::class, 'edit']);
Route::post('/user/update/{id}', [AdminUserController::class, 'update']);
Route::post('/user/addrole/{id}', [AdminHomeController::class, 'addrole']);
Route::get('/user/deleterole/{uid}/{rid}', [AdminHomeController::class, 'deleterole']);



});
// });
