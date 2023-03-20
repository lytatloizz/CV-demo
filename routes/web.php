<?php

use App\Http\Controllers\Controller;
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

Route::get('/', [Controller::class, 'index']);
Route::get('/about', [Controller::class, 'about']);
Route::get('/menu', [Controller::class, 'menu']);
Route::get('/contact', [Controller::class, 'contact']);
Route::get('/reservation', [Controller::class, 'reservation']);
Route::get('/service', [Controller::class, 'service']);
Route::get('/testimonial', [Controller::class, 'testimonial']);
Route::get('/shop', [Controller::class, 'shop']);
Route::get('/detail/{key}', [Controller::class, 'detail']);
Route::get('/blog/{key}', [Controller::class, 'blog']);
Route::get('/shop-cart', [Controller::class, 'shop_cart']);