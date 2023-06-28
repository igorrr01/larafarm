<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\ProductController;

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

Route::prefix('admin')->group(function () {
	Route::get('/', [App\Http\Controllers\Admin\IndexController::class, 'index'])->name('admin.index')->middleware('auth');
	Route::resource('/settings', SettingsController::class, ['as' => 'admin'])->middleware('auth');
	Route::patch('/settings/update', [SettingsController::class, 'update'],  ['as' => 'admin'])->name('admin.settings.update')->middleware('auth');

	Route::resource('/product', ProductController::class, ['as' => 'admin'])->middleware('auth');

});