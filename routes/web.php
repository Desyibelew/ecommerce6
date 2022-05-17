<?php
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\ProductController;
use App\Http\Controllers\CategoryController;
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
Route::get('/product/register',[ProductController::class,'register'])->name('product/register');
Route::post('product.register',[ProductController::class,'store'])->name('product/register');
//Route::get('/product/register',[ProductController::class,'register'])->name('Category/register');
//Route::post('product.register',[ProductController::class,'store'])->name('Category/register');
Route::get('/Category/register', [CategoryController::class, 'register'])->name('Category/register');
Route::post('/Category/register', [CategoryController::class, 'store'])->name('Category/register');
Route::get('/Category/get_all', [CategoryController::class, 'get_all'])->name('Category/get_all');
Route::get('/Category/get_by_id/{id}', [CategoryController::class, 'get_by_id']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController ::class, 'index'])->name('home');
Route::get('/product/list', [ProductController::class, 'get_all'])->name('product/list');
Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
Route::post('/product/update',[ProductController::class,'update'])->name('product/update');
Route::get('/product/delete/{id}', [ProductController::class, 'delete']);
Route::get('/product/get_by_id/{id}', [ProductController::class, 'get_by_id']);


//Route::get('/home', [App\Http\Controllers\HomeController ::class, 'index'])->name('home');
Route::get('/Customer/registor_for_license',[CustomerController::class,'registor_for_license'])->name('product/registor_for_license');
Route::post('Customer.registor_for_license',[CustomerController::class,'store']);
Route::get('/Customer/get_license', [CustomerController::class, 'get_all'])->name('product/get_license');
//Route::get('/Customer/edit/{id}', [CustomerController::class, 'edit']);
Route::post('/Customer/update_customer_license',[CustomerController::class,'update_customer_license'])->name('product/update_customer_license');
Route::get('/Customer/cancel_customer_license/{id}', [CustomerController::class, 'cancel_customer_license']);
Route::get('/Customer/get_by_id/{id}', [CustomerController::class, 'get_by_id']);