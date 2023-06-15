<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;

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
    return view('home');
});

Route::prefix('products')->group(function () {
    Route::get('/', function () {
        return view('products');
    });
});

Route::get('/news/{id}', function ($id) {
    return view('news', ['id' => $id]);
});

Route::prefix('program')->group(function () {
    Route::get('/', function () {
        return view('program');
    });
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::resource('contact-us', ContactUsController::class)->only([
    'index'
]);

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/products2', function () {
    return view('products2');
});
Route::get('/promotion', function () {
    return view('promotion');
});
Route::get('/index', function () {
    return view('index');
});