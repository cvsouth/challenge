<?php

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

Auth::routes();

Route::get('/', [App\Http\Controllers\MessagesController::class, 'index'])->name('messages');

Route::post('/refresh-token', [App\Http\Controllers\TokenController::class, 'refresh'])->name('refresh-token');
