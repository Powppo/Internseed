<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [App\Http\Controllers\PageController::class, 'aboutus'])->name('aboutus');

Route::get('/lihat', [App\Http\Controllers\LihatController::class, 'index']);

/*Google Sign in Route*/
Route::get('/auth/redirect', [App\Http\Controllers\Auth\LoginController::class, 'redirectToProvider']);
Route::get('/auth/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleProviderCallback']);


