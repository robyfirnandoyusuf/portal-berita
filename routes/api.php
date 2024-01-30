<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group(['prefix' => 'v1'], function() {
    Route::group(['prefix' => 'kategori', 'as' => 'kategori.', 'namespace' => 'App\Http\Controllers\API'], function() {
        Route::get('/get-kategori', [
            'uses' => 'KategoriController@index',
            'as' => 'kategori.get-kategory'
        ]);

        Route::post('/post-kategory', [
            'uses' => 'KategoriController@store',
            'as' => 'kategori.post-kategory'
        ]);
        // Route::put('/post-kategory', [
        //     'uses' => ''
        //     'as' => 
        // ]);
        // Route::delete('/destroy-kategory', [
        //     'uses' => ''
        //     'as' => 
        // ]);
    });
    Route::group(['prefix' => 'berita', 'as' => 'berita.', 'namespace' => 'App\Http\Controllers\API'], function() {
        Route::post('/post-berita',[
            'uses' => 'BeritaController@create',
            'as' => 'berita.post-berita'
        ]);
        Route::get('/get-berita/{id}',[
            'uses' => 'BeritaController@show',
            'as' => 'berita.get-berita-byId'
        ]);
        Route::get('/get-berita',[
            'uses' => 'BeritaController@index',
            'as' => 'berita.get-berita'
        ]);


    });
});

// Route::group(['as' => 'v2.'], function() {
//     Route::group(['as' => 'kategori.'], function() {
//         Route::get('/get-kategory', 'KategoriController@index');
//     });
// });
