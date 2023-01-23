<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartProductsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/selfcare', [HomeController::class, 'index']
);

Route::get('/selfcare/cart-products', [CartProductsController::class, 'cartProducts']
);

Route::get('/selfcare/add-product-cart/{id}', [CartProductsController::class, 'addProduct']
);

Route::get('/selfcare/del-product-cart/{id}', [CartProductsController::class, 'delProduct']
);

Route::get('/selfcare/sub-product-cart/{id}', [CartProductsController::class, 'subProduct']
);

