<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExperimentController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/experiment/{id}', [ExperimentController::class, 'show']);

Route::get('/editor', [CKEditorController::class, 'index']);

Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');

Route::get('/login', [AuthController::class, 'login'])->name('auth.login');

Route::get('/signup', [AuthController::class, 'signup']);

Route::post('/register', [AuthController::class, 'register']);

Route::post('/auth/check', [AuthController::class, 'authentication'])->name('auth.authentication');

Route::get('logout', [AuthController::class, 'logout']);
