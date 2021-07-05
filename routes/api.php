<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\PosController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\SalaryController;
use App\Http\Controllers\Api\ExpenseController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\SupplierController;
use App\Http\Controllers\Api\CustommerController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});


//JWT
Route::group([
    'middleware' => 'api',
    'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [AuthController::class,'login']);
    Route::post('singup', [AuthController::class,'singup']);
    Route::post('logout',[AuthController::class, 'logout']);
    Route::post('refresh',[AuthController::class, 'refresh']);
    Route::post('me',[AuthController::class, 'me']);
});
//End JWT

//Employee
Route::apiResource('/employee', EmployeeController::class);

//Supplier
Route::apiResource('/supplier', SupplierController::class);

//Category
Route::apiResource('/category', CategoryController::class);

//Product
Route::apiResource('/product', ProductController::class);
Route::get('/category/products/{id}', [ProductController::class,'categoryProduct']);

//Expense
Route::apiResource('/expense', ExpenseController::class);


//Pay salary
Route::post('/salary/paid/{id}', [SalaryController::class,'salarypaid']);
Route::get('/salary', [SalaryController::class,'allSalary']);
Route::get('/salary/view/{id}', [SalaryController::class,'viewSalary']);
Route::get('/salary/edit/{id}', [SalaryController::class,'editSalary']);
Route::post('/salary/paid/edit/{id}', [SalaryController::class,'salaryupdate']);

//Stock
Route::post('/product/stock/update/{id}',[ProductController::class,'upateStock']);

//Customer
Route::apiResource('/customer', CustommerController::class);

//Pos
Route::get('/pos/add-to-cart/{id}',[PosController::class,'addToCart']);
Route::get('/pos/cart/product',[PosController::class,'cartProduct']);
Route::get('/pos/cart/product/remove/{id}',[PosController::class,'cartRemove']);
Route::get('/cart/product/decrement/{id}',[PosController::class,'cartDecrement']);
Route::get('cart/product/increment/{id}',[PosController::class,'cartIncrement']);
Route::get('/vat',[PosController::class,'vat']);
Route::get('/vat/first',[PosController::class,'first']);
Route::post('/vat/store',[PosController::class,'vatStore']);
Route::get('/vat/show/{id}',[PosController::class,'vatShow']);
Route::post('/vat/update/{id}',[PosController::class,'vatUpdate']);

//Order
Route::post('/order/done',[OrderController::class,'orderDone']);
Route::get('/order',[OrderController::class,'Order']);
Route::get('/order/details/{id}',[OrderController::class,'Orderdetails']);
Route::get('/order/details/all/{id}',[OrderController::class,'OrderdetailsAll']);
Route::post('/search/order/',[OrderController::class,'searchOrder']);

//HomeController
Route::get('/home/sell',[HomeController::class,'sell']);
Route::get('/home/paid',[HomeController::class,'paid']);
Route::get('/home/due',[HomeController::class,'due']);


