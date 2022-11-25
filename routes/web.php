<?php

use App\Http\Controllers\LeretecController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



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

Route::get('/home', function () {
    return view('leretec/home');
});

Route::get('/form', function () {
    return view('leretec/form');
})->middleware('admin');

Route::get('/login', function () {
    return view('leretec/login');
});

// Route::get('/admin', function () {
//     return view('leretec/admin');
// }); 

Route::get('/', function () {
    return view('leretec/landingpage');
});

Route::get('/admin/newlink', function () {
    return view('leretec/newlink');
})->middleware('admin');





Route::post('/form/cadastrar', [LeretecController::class,'store'])->middleware('admin');

Route::get('/home', [LeretecController::class, 'index']);

Route::get('/admin', [LeretecController::class, 'index_admin'])->middleware('admin');

Route::get('/historia/{id}', [LeretecController::class, 'index_historia']); 

Route::delete('/admin/{id}', [LeretecController::class, 'destroy'])->middleware('admin');

Route::get('/admin/edit/{id}', [LeretecController::class, 'edit'])->middleware('admin');

Route::put('/admin/update/{id}', [LeretecController::class, 'update'])->middleware('admin');

Route::get('/historia/export_user_pdf/{id}', [LeretecController::class, 'export_user_pdf']);

Route::get('/historia/view_user_pdf/{id}', [LeretecController::class, 'view_user_pdf']);

Route::get('/search', [LeretecController::class, 'search']);
Route::get('/search2', [LeretecController::class, 'search2']);
Route::get('/search3', [LeretecController::class, 'search3']);

//admin user management routes
// Route::get('/admin/users', [UserController::class, 'allusers'])->middleware('admin');

// Route::get('/admin/users/register', [UserController::class, 'create'])->middleware('admin');
// Route::post('register', [UserController::class, 'store'])->middleware('admin');

// //admin auth routes
Route::post('/auth', [UserController::class, 'auth']);

Route::get('/logout', [UserController::class, 'logout'])->name('logout');
