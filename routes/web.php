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

Route::get('/', function () {return view('welcome');});

// Route::get('data', [FirebaseController::class, 'index'])->name('firebase.index');

Route::get('post', [PostController::class, 'index'])->name('post.inedx');

Route::get('home', function () {
    return view('home');
});

Route::get('loginPage', function () {
    return view('login');
});

//Registration
Route::get('userRegister', function () {return view('register');});
Route::post('register', [FirebaseController::class, 'signUp']);

//Login
Route::get('userLogin', function () {return view('login');});
Route::post('login', [FirebaseController::class, 'signIn']);

//Logout
Route::get('logout', [FirebaseController::class, 'signOut']);
// Route::get('logout', 'FirebaseController@signOut');

//CheckSession
Route::get('check', [FirebaseController::class, 'userCheck']);
// Route::get('check', 'FirebaseController@userCheck');


// Route::get('contacts', [ContactController::class, 'index']);
// Route::get('add-contact', [ContactController::class, 'create']);
// Route::post('contacts', [ContactController::class, 'store']);