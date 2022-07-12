<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Cashier\CashierController;
use App\Http\Controllers\Management\MenuController;
use App\Http\Controllers\Management\TableController;
use App\Http\Controllers\Management\CategoryController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/management', function(){
    return view('management.index');
});
//routes for management
Route::resource('management/category', CategoryController::class);
Route::resource('management/menu', MenuController::class);
Route::resource('management/table', TableController::class);

//routes for cashier
Route::get('/cashier',[CashierController::class,'index']);
Route::get('/cashier/getTable',[CashierController::class,'getTables']);
Route::get('/cashier/getMenuByCategory/{category_id}',[CashierController::class,'getMenuByCategory']);
Route::post('/cashier/orderFood',[CashierController::class,'orderFood']);
Route::get('/cashier/getSaleDetailsByTable/{table_id}',[CashierController::class,'getSaleDetailsByTable']);
Route::post('/cashier/confirmOrderStatus',[CashierController::class,'confirmOrderStatus']);
Route::post('/cashier/deleteSaleDetail',[CashierController::class,'deleteSaleDetail']);



Route::get('/report', function(){
    return "This is Report Page !!!";
});