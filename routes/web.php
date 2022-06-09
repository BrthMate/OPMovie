<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
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
    return view('pages.home');
});
Route::get('/content', function () {
    return view('pages.content');
});
Route::get('/movies', function () {
    return view('pages.movie');
});
Route::get('/series', function () {
    return view('pages.series');
});
Route::get('/series/content/1', function () {
    return view('pages.content_series');
});
Route::get('/movies/content/1', function () {
    return view('pages.content_movie');
});