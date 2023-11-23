<?php

use App\Http\Controllers\Backsite\DashboardController;
use App\Http\Controllers\Backsite\BeritaController;
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

Route::resource('/berita',BeritaController::class);
/*
1. Create
2. show
3. index
4. destroy
5. edit
6. update

*/
// Route::get('/backsite/berita/index', [
//     'uses' => 'App\Http\Controllers\Backsite\DashboardController@show',
//     'as'=> 'index'
// ]);

// Route::get('/backsite/berita/create', [
//     'uses' => 'App\Http\Controllers\Backsite\DashboardController@create',
//     'as'=> 'create'
// ]);

// Route::get('/backsite/berita/edit', [
//     'uses' => 'App\Http\Controllers\Backsite\DashboardController@edit',
//     'as'=> 'edit'
// ]);
