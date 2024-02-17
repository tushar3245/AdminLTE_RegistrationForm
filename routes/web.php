<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\FormController;
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

Route::get('/', function () {
    return view('index');
});

Route::post('/posts', [PostController::class, 'store']);
Route::get('/general', [FormController::class, 'GeneralForm']);
Route::get('/regtistration_form', [FormController::class, 'RegistrationForm']);