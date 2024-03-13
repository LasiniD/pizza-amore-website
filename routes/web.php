<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\MenuController;
use Laravel\Fortify\RoutePath;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;


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
    return view('/pages/index');
});
Route::get('/Logged', function () {
    return view('/pages/indexLogged');
});

Route::get('/about', function () {
    return view('/pages/about');
});

Route::get('/aboutLogged', function () {
    return view('/pages/aboutLogged');
});

Route::get('/menu', [MenuController::class,'index']);

Route::get('/menuLogged', [MenuController::class,'logged']);
Route::get('/cart',[MenuController::class,'cart'])->name('cart');
Route::get('/menuLogged/{id}',[MenuController::class,'addItemToCart'])->name('addItem.to.cart');


//Route::get('/login', function () {
  //  return view('/auth/login');
//});

Route::middleware('admin:admin')->group(function () {
    Route::get('admin/login', [AdminController::class, 'loginForm']);
    Route::post('admin/login', [AdminController::class, 'store'])->name('admin.login');
});

Route::middleware([
    'auth:sanctum,admin',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('dashboard');
    })->name('dashboard')->middleware('auth:admin');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('/pages/indexLogged');
    })->name('dashboard');
});

Route::resource('/pizza', PizzaController::class);

Route::resource('/category', CategoriesController::class);

Route::post(RoutePath::for('logout', '/logout'), [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
