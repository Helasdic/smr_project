<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BaseController;
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



Route::prefix('/')->group(function () {
    Route::get('/konsultan-pajak', [BaseController::class, 'index']);
    Route::get('/', function () {
        return redirect('/konsultan-pajak');
    });
    Route::get('/blog', function () {
        return view('about.about');
    });
    Route::get('/contact', function () {
        return view('pages.contact');
    });

    // Auth
    Route::get('/admin', [LoginController::class, 'viewLogin']);
    Route::post('/admin', [LoginController::class, 'login'])->name('login');
});