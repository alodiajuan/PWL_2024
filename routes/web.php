<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/world', function () { return 'World';
});


Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([ 'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([ 'create', 'store', 'update', 'destroy'
]);

Route::get('/greeting', function () {
    return view('hello', ['name' => 'Alodia Juan Feronika']);
    });
    
Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Alodia Juan Feronika']);
    });
Route::get('/greeting', [WelcomeController::class, 'greeting']);

Route::get('/', [HomeController::class, 'index']);

Route::prefix('category')->group(function () {
    Route::get('food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('home-care', [ProductController::class, 'homeCare']);
    Route::get('baby-kid', [ProductController::class, 'babyKid']);
});

Route::get('user/{id}/name/{name}', [UserController::class, 'profile']);
Route::get('sales', [SalesController::class, 'index']);




