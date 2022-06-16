<?php

use App\Http\Controllers\LeretecController;
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

Route::get('/', function () {
    return view('leretec/home');
});

Route::get('/form', function () {
    return view('leretec/form');
});

Route::get('/admin', function () {
    return view('leretec/login');
});

Route::post('/form', [LeretecController::class,'store']);

Route::get('/', [LeretecController::class, 'index']);