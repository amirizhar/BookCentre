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
Route::get('home', function () {return view('home');});

// Route::get('contacts', [ContactController::class, 'index']);
// Route::get('add-contact', [ContactController::class, 'create']);
// Route::post('contacts', [ContactController::class, 'store']);