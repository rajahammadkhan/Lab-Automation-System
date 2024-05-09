<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeshbordController;
use App\Http\Controllers\Tester\TesterController;
use App\Http\Controllers\Users\Products\ProductsController;
use App\Http\Controllers\Users\Category\CategoryController;
use App\Http\Controllers\Users\Testing\TestingController;
use App\Http\Controllers\Users\Approved\ApprovedController;
use App\Http\Controllers\Users\Rejected\RejectedController;
use App\Http\Controllers\Tester\UserDetail\UserDetailController;
use App\Http\Controllers\Tester\TestingRequest\TestingRequestController;
use App\Http\Controllers\Tester\Profile\ProfileController;

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



//--------------------------------Users-Routes------------------------------------------

Route::middleware(['auth','is_user'])->group(function()
{
Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::resource('dashbord',DeshbordController::class);
Route::resource('products',ProductsController::class);
Route::resource('category',CategoryController::class);
Route::resource('testing',TestingController::class);
Route::resource('approved',ApprovedController::class);
Route::resource('rejected',RejectedController::class);
});

//--------------------------------Tester-Routes------------------------------------------

Route::middleware(['auth','is_admin'])->group(function()
{
//Route::get('/tester-dashboard', [App\Http\Controllers\Tester\TesterController::class,'index'])->name('tester-dashboard');
Route::resource('tester-dashboard',TesterController::class);
Route::resource('user-detail',UserDetailController::class);
Route::resource('testing-request',TestingRequestController::class);
Route::resource('profile',ProfileController::class);
});
