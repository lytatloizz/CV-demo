<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BillsController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ManufacturesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProtypesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

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

//-----------------------------------Customer layout-----------------------------------
Route::get('/', [Controller::class, 'index'])->name('index');
Route::post('/register', [AdminController::class, 'customerRegister'])->name('customerRegister');
Route::get('/about', [Controller::class, 'about'])->name('about');
Route::get('/menu', [Controller::class, 'menu'])->name('menu');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/reservation', [Controller::class, 'reservation']);
Route::get('/service', [Controller::class, 'service'])->name('service');
Route::get('/testimonial', [Controller::class, 'testimonial']);
Route::get('/shop', [Controller::class, 'shop'])->name('shop');
Route::get('/detail/{key}', [Controller::class, 'detail'])->name('detail');
Route::get('/blog/{key}', [Controller::class, 'blog']);
Route::get('/shop-cart', [CartsController::class, 'show'])->name('shopCart');

//Shop carts
Route::post('/shop-cart-add', [CartsController::class, 'store'])->name('AddCart');
Route::put('/shop-cart-update', [CartsController::class, 'update'])->name('UpdateCart');
Route::get('/shop-cart-delete/{id}', [CartsController::class, 'destroy'])->name('DeleteCart');
//Bills
Route::get('/bill-show',[BillsController::class, 'show'])->name('billsShow');
Route::post('/bill-create',[BillsController::class, 'store'])->name('billCreate');
Route::get('/bill-delete/{id}',[BillsController::class, 'destroy'])->name('billDelete');

// Search ajax
Route::get('/ajax.search-ajax-result', [ProductsController::class, 'search_ajax']);
Route::get('/ajax.search-ajax-show', [ProductsController::class, 'show_ajax']);
//-----------------------------------Admin layout--------------------------------------

Route::post('/login',[AdminController::class,'logins'])->name('logins');
Route::get('/signout',[AdminController::class,'signOut']);
Route::prefix('admin')->group(function () {
    Route::get('/',[AdminController::class,'dashboard']);
    Route::get('/ui', function () { return view('admin.ui'); })->name('ui');

    Route::prefix('products')->group(function () {
        Route::get('/', [ProductsController::class, 'show'])->name('products');
        Route::get('/trash', [ProductsController::class, 'showTrash'])->name('productsTrash');
        Route::get('/product', [ProductsController::class, 'create'])->name('productAdd');
        Route::post('/product-store', [ProductsController::class, 'store'])->name('productsStore');
        Route::get('/product/{id}', [ProductsController::class, 'edit'])->name('productEdit');
        Route::get('/product-trash/{id}', [ProductsController::class, 'trash'])->name('productTrash');
        Route::get('/product-restore/{id}', [ProductsController::class, 'restore'])->name('productRestore');
        Route::put('/product-update', [ProductsController::class, 'update'])->name('productsUpdate');
        Route::get('/product-detele/{id}', [ProductsController::class, 'destroy'])->name('productDelete');
    });
    Route::prefix('manufactures')->group(function () {
        Route::get('/',[ManufacturesController::class, 'show'])->name('manufactures');
        Route::get('/trash',[ManufacturesController::class, 'showTrash'])->name('manufacturesTrash');
        Route::get('/manufacture',[ManufacturesController::class, 'create'])->name('manufactureCreate');
        Route::post('/manufacture-store',[ManufacturesController::class, 'store'])->name('manufactureStore');
        Route::get('/manufacture/{id}',[ManufacturesController::class, 'edit'])->name('manufactureEdit');
        Route::get('/manufacture-trash/{id}',[ManufacturesController::class, 'trash'])->name('manufactureTrash');
        Route::get('/manufacture-restore/{id}',[ManufacturesController::class, 'restore'])->name('manufactureRestore');
        Route::put('/manufacture-update',[ManufacturesController::class, 'update'])->name('manufactureUpdate');
        Route::get('/manufacture-delete/{id}',[ManufacturesController::class, 'destroy'])->name('manufactureDelete');
    });
    Route::prefix('protypes')->group(function () {
        Route::get('/', [ProtypesController::class, 'show'])->name('protypes');
        Route::get('/trash', [ProtypesController::class, 'showTrash'])->name('protypesTrash');
        Route::get('/protype', [ProtypesController::class, 'create'])->name('protypeCreate');
        Route::get('/protype/{id}', [ProtypesController::class, 'edit'])->name('protypeEdit');
        Route::get('/protype-trash/{id}', [ProtypesController::class, 'trash'])->name('protypeTrash');
        Route::get('/protype-restore/{id}', [ProtypesController::class, 'restore'])->name('protypeRestore');
        Route::put('/protype-update',[ProtypesController::class, 'update'])->name('protypeUpdate');
        Route::post('/protype-store',[ProtypesController::class, 'store'])->name('protypeStore');
        Route::get('/protype-delete/{id}',[ProtypesController::class, 'destroy'])->name('protypeDelete');
    });
    Route::prefix('users')->group(function () {
        Route::get('/', [UsersController::class, 'show'])->name('users');
        Route::get('/trash', [UsersController::class, 'showTrash'])->name('usersTrash');
        Route::get('/user', [UsersController::class, 'create'])->name('userCreate');
        Route::get('/user/{id}', [UsersController::class, 'edit'])->name('userEdit');
        Route::get('/user-trash/{id}', [UsersController::class, 'trash'])->name('userTrash');
        Route::get('/user-restore/{id}', [UsersController::class, 'restore'])->name('userRestore');
        Route::put('/user-update', [UsersController::class, 'update'])->name('userUpdate');
        Route::post('/user-store', [UsersController::class, 'store'])->name('userStore');
        Route::get('/user-delete/{id}', [UsersController::class, 'destroy'])->name('userDelete');
    });
});