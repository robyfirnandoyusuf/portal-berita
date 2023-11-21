<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backsite\KategoriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [
    'uses' => 'App\Http\Controllers\Frontsite\HomeController@index',
    'as' => 'home'
]);

Route::get('/berita/detail', [
    'uses' => 'App\Http\Controllers\Frontsite\BeritaController@show',
    'as' => 'berita'
]);

Route::get('/backsite/dashboard', [
    'uses' => 'App\Http\Controllers\Backsite\DashboardController@index',
    'as' => 'backsite.dashboard'
]);

Route::get('/kategori', [
    'uses' => 'App\Http\Controllers\Backsite\KategoriController@index',
    'as' => 'backsite.kategori.index'
]);




Route::get('/kategori',[KategoriController::class, 'index']);


Route::get('/backsite/crud/tambah', [
    'uses' => 'App\Http\Controllers\Backsite\KategoriController@index',
    'as' => 'backsite.crud.tambah'
]);
    