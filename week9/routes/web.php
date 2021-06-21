<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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
    return view('/home');
});
Route::get('/about', function () {
    return view('/about');
});
Route::get('/contact', function () {
    return view('/contact');
});
Route::get('/agent-single', function () {
    return view('/agent-single');
});
Route::get('/agents-grid', function () {
    return view('/agents-grid');
});
Route::get('/blog-grid', function () {
    return view('/blog-grid');
});
Route::get('/blog-single', function () {
    return view('/blog-single');
});
Route::get('/property-grid', function () {
    return view('/property-grid');
});
Route::get('/property-single', function () {
    return view('/property-single');
});
