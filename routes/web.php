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

Route::get('/login', function () {
    return view('leretec/login');
});

Route::get('/admin', function () {
    return view('leretec/admin');
});

Route::get('/historia', function () {
    return view('leretec/history');
});



Route::post('/form', [LeretecController::class,'store']);

Route::get('/', [LeretecController::class, 'index']);

Route::get('/admin', [LeretecController::class, 'index_admin']);

Route::get('/historia', [LeretecController::class, 'index_historia']); 

Route::delete('/admin/{id}', [LeretecController::class, 'destroy']);

Route::get('/admin/edit/{id}', [LeretecController::class, 'edit']);

Route::put('/admin/update/{id}', [LeretecController::class, 'update']);