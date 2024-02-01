<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\API\CategoryController;


// /*
// |--------------------------------------------------------------------------
// | API Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register API routes for your application. These
// | routes are loaded by the RouteServiceProvider and all of them will
// | be assigned to the "api" middleware group. Make something great!
// |
// */

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::get('/category', [CategoryController::class, 'index']);
// Route::get('/category/{id}',[CategoryController::class, 'show']);
// Route::post('/category',[CategoryController::class, 'store']);
// Route::patch('/category/{id}', [CategoryController::class, 'update']);
// Route::delete('/category/{id}', [CategoryController::class, 'destroy']);
// Route::get('/category')

Route::group(['prefix' => 'v1'], function() {
    Route::group(['prefix' => 'kategori', 'as' => 'kategori.', 'namespace' => 'App\Http\Controllers\API'], function() {
        Route::get('/category', [
            'uses' => 'CategoryController@index',
            'as' => 'kategori.get-Category'
        ]);

        Route::get('/category/{id}', [
            'uses' => 'CategoryController@show',
            'as' => 'kategori.get-CategoryById'
        ]);


        Route::post('/category', [
            'uses' => 'CategoryController@store',
            'as' => 'kategori.post-CategoryCreate'
        ]);

        Route::patch('/category/{id}', [
            'uses' => 'CategoryController@update',
            'as' => 'kategori.patch-CategoryUpdate'
        ]);

        Route::delete('/category/{id}', [
            'uses' => 'CategoryController@destroy',
            'as' => 'kategori.delete-CategoryDelete'
        ]);

        Route::get('/category-filter', [
            'uses' => 'CategoryController@filter',
            'as' => 'kategori.list-CategoryFilter'
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

    });
