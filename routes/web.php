<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\CenterController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\UpazilaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserTypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminAuthController;

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
})->name('welcome');

Route::get('/admin/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
Route::post('/admin/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
Route::post('/admin/logout', [AdminAuthController::class, 'adminLogout'])->name('adminLogout');
Route::get('/user/register', [UserController::class, 'userRegister'])->name('userRegister');
Route::post('/user/register/store', [UserController::class, 'userRegisterStore'])->name('userRegisterStore');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->name('admin.')->middleware(['adminauth'])->group( function(){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('association', AssociationController::class);
    Route::resource('center', CenterController::class);
    Route::resource('division', DivisionController::class);
    Route::resource('district', DistrictController::class);
    Route::resource('upazila', UpazilaController::class);
    Route::resource('admin', AdminController::class);
    Route::resource('userType', UserTypeController::class);
    Route::resource('user', UserController::class);
    Route::get('/profile', [AdminController::class, 'adminProfile'])->name('adminProfile');
});



Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cleared!";
});
