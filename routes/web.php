<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Facade;
// use Inertia;

use Illuminate\support\Facades\Auth;
 use App\Http\Controllers\Auth\LoginController;
 use App\Http\Controllers\CartController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\HomeController;
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
Route::group(['middleware' => ['authenticate', 'roles']], function (){
    Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');



    Route::post('/login', function () {
        return view('auth.login');
    });










Route::post('/register', function () {
    return view('auth.register');
});


});
// Route::get('logout', [HomeController::class, 'logout']);


// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Auth::routes();
Route::get('logout', [HomeController::class, 'logout']);




Route::get('/', function () {
    return view('Users.Usrhome');
});
Route::post('/user/login', function () {
    return view('Users.Login');
});
Route::get('/user/register', function () {
    return view('Users.Register');
});

Route::get('/user/blogs', function () {
    return view('Users.Blogs');
});

// Route::get('/user/cart', function () {
//     return view('Users.Shopcart');
// });
Route::get('/user/cart', [CartController::class, 'index']);
Route::get('/user/cart/create', [CartController::class, 'create']);

Route::post('/user/cart/store', [CartController::class, 'store']);
Route::get('/user/cart/show/{id}', [CartController::class, 'show']);
Route::get('/user/cart/delete/{id}', [CartController::class, 'destroy']);
Route::get('/user/cart/edit/{id}', [CartController::class, 'edit']);
Route::post('/user/cart/update/{id}', [CartController::class, 'update']);


Route::get('/user/comment', function () {
    return view('Users.Contact');
 });


Route::get('/user/products/{id}/{slug}', [HomeController::class, 'cateprod']);
Route::get('/user/{category_title}', [HomeController::class, 'products']);
// Route::get('/user//{id}', function () {
//     return view('Users.Product-details');
// });
Route::get('/user/product-detail/{id}', [HomeController::class, 'productdd']);


Route::get('/', [HomeController::class, 'index']);





Route::post('/storemessage', [HomeController::class, 'storemessage']);

Route::middleware(['auth:sanctum','verified'])->get('/dashboard',function(){
    return view('dashboard');
});







Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);


Route::get('/profile/show', function () {
    return view('profile.show');
});
Route::get('/userpanel', [App\Http\Controllers\UserController::class, 'index']);

