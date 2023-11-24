<?php

use App\Http\Controllers\Backsite\RoleController;
use App\Http\Controllers\Backsite\DashboardController;
use App\Http\Controllers\Backsite\KategoriController;

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

Route::get('/backsite/dashboard', [DashboardController::class,'index']);

// Route::get('/backsite/role/index', [
//     'uses' =>  'App\Http\Controllers\Backsite\RoleController@index',
//     'as' => 'index'
// ]);

// Route::get('/backsite/role', [
//     'uses' =>  'App\Http\Controllers\Backsite\RoleController@index',
//     'as' => 'index'
// ]);
Route::group(['as' => 'backsite.'], function() {
    Route::resource('/backsite/role', RoleController::class);
});



// 1. create (ini buat nampilin halaman create)
// 2. store (buat engine store )
// 3. index (buat nampilin halaman depan)
// 4. destroy (buat hapus)
// 5. edit (buat nampilin halaman edit)
// 6. update (engine update)
// 7. show (buat nampilin halaman detail)


// Route::get('/backsite/kategori/index', [
//     'uses' =>  'App\Http\Controllers\Backsite\KategoriController@index',
//     'as' => 'backsite.kategori.index'
// ]);

// Route::get('/backsite/kategori/create', [
//     'uses' =>  'App\Http\Controllers\Backsite\KategoriController@create',
//     'as' => 'backsite.kategori.create'
// ]);

// Route::get('/backsite/kategori/edit', [
//     'uses' =>  'App\Http\Controllers\Backsite\KategoriController@edit',
//     'as' => 'backsite.kategori.edit'
// ]);

Route::group(['as' => 'backsite.'], function() {
    Route::resource('/backsite/kategori', KategoriController::class);
});
