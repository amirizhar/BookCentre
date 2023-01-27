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

// Route::get('/', function () {return view('welcome');});
// Route::get('data', [FirebaseController::class, 'index'])->name('firebase.index');

//Login
Route::get('/', function () {return view('Login.login');});
Route::post('login', [FirebaseController::class, 'signIn']);
Route::get('home', function () {return view('Staff.home');});

//Registration
Route::get('userRegister', function () {return view('register');});
Route::post('register', [FirebaseController::class, 'signUp']);

//Logout
Route::get('logout', [FirebaseController::class, 'signOut']);

//CheckSession
Route::get('check', [FirebaseController::class, 'userCheck']);

// display, update, delete
Route::get('post', [PostController::class, 'index'])->name('post.inedx');