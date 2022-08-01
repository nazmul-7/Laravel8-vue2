<?php

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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AddressBookController;

Route::prefix('api')->group(function () {
// Route::prefix('api/users')->group(function () {

    Route::get('/categories/getAll',  [CategoryController::class, 'getAll']);


    // Auth Routes
    Route::post('/auth/registration',[UserController::class, 'register']);
    Route::post('/auth/login',[UserController::class, 'login']);
    Route::post('/auth/user/edit',[UserController::class, 'updateUser']);
    Route::post('/auth/activeAccount',[UserController::class, 'activeAccount']);
    Route::post('/auth/sendActivationCode',[UserController::class, 'sendActivationCode']);
    Route::get('/auth/getCustomer',[UserController::class, 'getCustomer']);

    // Password Reset
    Route::post('/auth/sendResetMessage',[UserController::class, 'sendResetMessage']);
    Route::post('/auth/getResetMessage',[UserController::class, 'getResetMessage']);
    Route::post('/auth/reset-password',[UserController::class, 'resetPassword']);


    // Products
    Route::get('/product/variations/{id}',[ProductController::class, 'variations']);
    Route::get('/product/setupData/{id}',[ProductController::class, 'setupData']);
    Route::get('/product/similar/{id}',[ProductController::class, 'similar']);

    //cart
    Route::get('/cart/getAll',[CartController::class, 'getAll'])->middleware('auth');
    Route::post('/cart/add',[CartController::class, 'add'])->middleware('auth');
    Route::post('/cart/remove',[CartController::class, 'remove'])->middleware('auth');
    Route::post('/cart/removeAll',[CartController::class, 'removeAll'])->middleware('auth');

    // delivery-option
    Route::get('/delivery-option/getAll',[CartController::class, 'getDeliveryOptions']);

    //cart
    Route::get('/addressbook/getAll',[AddressBookController::class, 'getAll'])->middleware('auth');
    Route::get('/addressbook/get/{id}',[AddressBookController::class, 'index'])->middleware('auth');
    Route::post('/addressbook/add',[AddressBookController::class, 'add'])->middleware('auth');
    Route::post('/addressbook/edit',[AddressBookController::class, 'edit'])->middleware('auth');
    Route::post('/addressbook/editBilling',[AddressBookController::class, 'editBilling'])->middleware('auth');
    Route::post('/addressbook/remove/{id}',[AddressBookController::class, 'remove'])->middleware('auth');
    Route::post('/addressbook/removeAll',[AddressBookController::class, 'removeAll'])->middleware('auth');



});

Route::post('/home/upload/images',  [HomeController::class, 'uploadImages']);

Route::get('/',  [HomeController::class, 'index']);
Route::get('/product/{slug}',  [ProductController::class, 'index']);
Route::get('/a007',  [HomeController::class, 'admin']);

Route::get('/logout', function () {
	Auth::logout();
    Session::flush();
	Session::forget('url.intented');
	return redirect("/");

});
Route::any('{slug}', [HomeController::class, 'index'])->where('slug', '([A-z\d\-\/_.]+)');

