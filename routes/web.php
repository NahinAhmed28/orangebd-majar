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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin','as'=>'admin.'], function(){

    Route::get('/dashboard', function () {
        return view('admin.layouts.default');
    })->name('dashboard');

    Route::resource('association', AssociationController::class);
    Route::resource('center', CenterController::class);
    Route::resource('division', DivisionController::class);
    Route::resource('district', DistrictController::class);
    Route::resource('upazila', UpazilaController::class);
    Route::resource('admin', AdminController::class);
    Route::resource('userType', UserTypeController::class);
    Route::resource('user', UserController::class);

});



Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cleared!";
});
