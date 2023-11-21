<?php

use App\Http\Controllers\Backsite\RoleController;
use App\Http\Controllers\Backsite\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::get('/backsite/dashboard', [DashboardController::class,'index'])->as('backsite.dashboard');

// Route::get('/backsite/role/index', [
//     'uses' =>  'App\Http\Controllers\Backsite\RoleController@index',
//     'as' => 'index'
// ]);

// Route::get('/backsite/role', [
//     'uses' =>  'App\Http\Controllers\Backsite\RoleController@index',
//     'as' => 'index'
// ]);

Route::resource('/role', RoleController::class);
// Route::get('/backsite/role/index', [
//     'uses' =>  'App\Http\Controllers\Backsite\RoleController@index',
//     'as' => 'index'
// ]);

// Route::get('/backsite/role/create', [
//     'uses' =>  'App\Http\Controllers\Backsite\RoleController@create',
//     'as' => 'create'
// ]);

// Route::get('/backsite/role/edit', [
//     'uses' =>  'App\Http\Controllers\Backsite\RoleController@edit',
//     'as' => 'edit'
// ]);
