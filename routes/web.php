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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//新規管理ユーザー登録画面
Route::get('/register',[App\Http\Controllers\CurriculumController::class, 'register'])->name('register');
//管理ユーザー登録ボタン
Route::post('/store',[App\Http\Controllers\CurriculumController::class, 'store'])->name('store');