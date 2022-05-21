<?php
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;

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

