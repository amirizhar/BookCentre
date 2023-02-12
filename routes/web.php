<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirebaseController;
use App\Http\Controllers\PostController;

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

// ---------------------------------Session---------------------------------
Route::get('/', function () {return view('Login.login');});
Route::post('login', [FirebaseController::class, 'signIn']);
Route::get('home', function () {return view('Staff.home');});
//Logout
Route::get('logout', [FirebaseController::class, 'signOut']);
//CheckSession
Route::get('check', [FirebaseController::class, 'userCheck']);

// ---------------------------------Admin---------------------------------

//Registration
Route::get('userRegister', function () {return view('Admin.register');});
Route::get('adminHome', function () {return view('Admin.home');});
Route::get('adminContact', function () {return view('Admin.contactPage');});
Route::post('register', [FirebaseController::class, 'signUp']);
Route::get('users', [FirebaseController::class, 'getUser']);
Route::get('adminBook', [FirebaseController::class, 'adminView'])->name('post.inedx');
Route::get('resetPassword/{email}', [FirebaseController::class, 'resetPassword']);
Route::get('admin-books', function () {return view('Admin.displayBooks');});

// ---------------------------------Staff---------------------------------

//Display book for one category
Route::get('books', function () {return view('Staff.displayBooks');});
// display, update, delete
Route::get('manageBook', [FirebaseController::class, 'index'])->name('post.inedx');
// Contact Page
Route::get('contact', function () {return view('Staff.contactPage');});
