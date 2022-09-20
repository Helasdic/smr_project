<?php

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
    Route::get('/', [BaseController::class, 'index']);
    Route::get('/single-blog', function () {
        return view('service.blog-single');
    });
    Route::get('/blog', function () {
        return view('about.about');
    });
    // Route::get('/services', function () {
    //     return view('service.our-service');
    // });
    Route::get('/contact', function () {
        return view('pages.contact');
    });
});