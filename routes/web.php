<?php

use App\Http\Controllers\MyHomeController;
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

Route::get('', [MyHomeController::class, 'index'])->name('index');
Route::get('/createnote', [MyHomeController::class, 'createnote'])->name('createnote');
Route::get('/contacts', [MyHomeController::class, 'contacts'])->name('contacts');
Route::get('/profile', [MyHomeController::class, 'profile'])->name('profile');


