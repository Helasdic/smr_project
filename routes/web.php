<?php

use App\Http\Controllers\Admin\DashboardController;
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
    // Route::get('/blog', function () {
    //     return view('about.about');
    // });
    // Route::get('/contact', function () {
    //     return view('pages.contact');
    // });

    // route prefix /konsultan-pajak for all pages
    Route::prefix('/konsultan-pajak')->group(function () {
        Route::get('/about', function () {
            return view('about.about');
        });
        Route::get('/services', function () {
            return view('pages.services');
        });
        Route::get('/team', function () {
            return view('pages.team');
        });
        Route::get('/pricing', function () {
            return view('pages.pricing');
        });
        Route::get('/faq', function () {
            return view('pages.faq');
        });
        Route::get('/blog', function () {
            return view('pages.blog');
        });
        Route::get('/blog-single', function () {
            return view('pages.blog-single');
        });
        Route::get('/contact', function () {
            return view('pages.contact');
        });

        // Auth
        Route::get('/admin', [LoginController::class, 'viewLogin']);
        Route::post('/admin', [LoginController::class, 'login'])->name('login');

        // prefix admin middleware auth
        Route::prefix('/admin')->middleware('auth')->group(function () {
            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
            Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
        });
    });

    // // Auth
    // Route::get('/admin', [LoginController::class, 'viewLogin']);
    // Route::post('/admin', [LoginController::class, 'login'])->name('login');
});