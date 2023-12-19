<?php
// backsite
use App\Http\Controllers\Backsite\RoleController;
use App\Http\Controllers\Backsite\DashboardController;
use App\Http\Controllers\Backsite\BeritaController;
use App\Http\Controllers\Backsite\KategoriController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backsite\UserController;
use App\Http\Controllers\Backsite\ProfileController;
use App\Http\Controllers\Backsite\GoogleController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;

// frontside
use App\Http\Controllers\Frontsite\detailController;


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

Route::group(['as' => 'backsite.'], function () {
    Route::resource('/backsite/dashboard', DashboardController::class)->middleware('auth');
    Route::resource('/backsite/role', RoleController::class)->middleware('auth');
    Route::resource('/backsite/berita', BeritaController::class)->middleware('auth');
    Route::resource('/backsite/kategori', KategoriController::class)->middleware('auth');
    Route::resource('/backsite/user', UserController::class)->middleware('auth');

    Route::post('/backsite/profile/update', [
        'uses' => 'App\Http\Controllers\Backsite\ProfileController@update',
        'as' => 'profile.update'
    ])->middleware('auth');
    Route::get('/backsite/profile', [
        'uses' => 'App\Http\Controllers\Backsite\ProfileController@index',
        'as' => 'profile.index'
    ])->middleware('auth');
    // Route::resource('/backsite/login', LoginController::class);
    // Route::resource('/backsite/berita', GambarController::class);
});

Auth::routes(['verify' => true]);

// Route::get('/backsite/login', [LoginController::class, 'index'])->name('backsite.login')->middleware('guest');
// Route::get('/backsite/register', [RegisterController::class, 'index'])->name('backsite.register.index');
// Route::post('/backsite/register', [RegisterController::class, 'store'])->name('backsite.register.index');
// Route::post('/backsite/login', [LoginController::class, 'authenticate']);
// Route::post('/backsite/logout', [LoginController::class, 'logout']);

// Route::post('//backsite/login', [
//     'uses' => 'App\Http\Controllers\Backsite\LoginController@authenticate',
//     'as' => 'backsite.login.authenticate'
// ]);

// Route::get('/backsite/logout', [
//     'uses' => 'App\Http\Controllers\Backsite\LoginController@logout',
//     'as' => 'backsite.logout'
// ]);

Route::group(['as' => 'backsite.'], function() {
    Route::resource('/backsite/dashboard', DashboardController::class)->middleware(['auth','cekRole:2']);
    Route::resource('/backsite/role', RoleController::class)->middleware(['auth','cekRole:2']);
    Route::resource('/backsite/berita', BeritaController::class)->middleware(['auth','cekRole:1,2']);
    Route::resource('/backsite/kategori', KategoriController::class)->middleware(['auth','cekRole:2']);
    Route::resource('/backsite/user', UserController::class)->middleware(['auth','cekRole:2']);
    Route::controller(GoogleController::class)->group(function(){
    Route::get('/auth/google','redirectToGoogle')->name('auth.google');
    Route::get('/auth/google/callback','handleGoogleCallback');
    // Route::resorce('/backsite/login', LoginController::class)->middleware('guest');
});
Route::post('/backsite/profile/update', [
    'uses' => 'App\Http\Controllers\Backsite\ProfileController@update',
    'as' => 'profile.update'
    ])->middleware(['auth','cekRole:1,2']);
    Route::get('/backsite/profile', [
        'uses' => 'App\Http\Controllers\Backsite\ProfileController@index',
        'as' => 'profile.index'
         ])->middleware(['auth','cekRole:1,2']);
// Route::resource('/backsite/login', LoginController::class);
// Route::get('/backsite/register', [RegisterController::class, 'index'])->name('backsite.register');
    // Route::resource('/backsite/berita', GambarController::class);
});

Route::post('/backsite/berita/upload', [
    'uses' => 'App\Http\Controllers\Backsite\BeritaController@storeImage',
    'as' => 'backsite.berita.upload'
])->middleware(['auth','cekRole:1,2']);

// detail berita
Route::get('/detail/{id}', [
    'uses' => 'App\Http\Controllers\Frontsite\DetailController@detail',
    'as' => 'detail'
]);
Route::get('/register/verify/email', [
    'uses' =>   'App\Http\Controllers\Auth\VerifyEmailController@index',
    'as' => 'verify.email'
])->middleware('auth');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
