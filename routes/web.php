<?php
// backsite
use App\Http\Controllers\Backsite\RoleController;
use App\Http\Controllers\Backsite\DashboardController;
use App\Http\Controllers\Backsite\BeritaController;
use App\Http\Controllers\Backsite\KategoriController;
use App\Http\Controllers\Backsite\LoginController;
use App\Http\Controllers\Backsite\UserController;
use App\Http\Controllers\Backsite\ProfileController;
use App\Http\Controllers\Backsite\RegisterController;   

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
Route::get('/backsite/login', [LoginController::class, 'index'])->name('backsite.login')->middleware('guest');
Route::get('/backsite/register', [RegisterController::class, 'index'])->name('backsite.register');
// Route::post('/backsite/login', [LoginController::class, 'authenticate']);
// Route::post('/backsite/logout', [LoginController::class, 'logout']);

Route::post('/backsite/login', [
    'uses' => 'App\Http\Controllers\Backsite\LoginController@authenticate',
    'as' => 'backsite.login.authenticate'
]);
Route::post('/backsite/register', [
    'uses' => 'App\Http\Controllers\Backsite\LoginController@authenticate',
    'as' => 'backsite.register'
]);
Route::post('/backsite/berita/upload', [
    'uses' => 'App\Http\Controllers\Backsite\BeritaController@storeImage',
    'as' => 'backsite.berita.upload'
])->middleware('auth');

// detail berita
Route::get('/detail/{id}', [
    'uses' => 'App\Http\Controllers\Frontsite\DetailController@detail',
    'as' => 'detail'
]);

// return view user



// Route::get('/backsite/role/index', [
//     'uses' =>  'App\Http\Controllers\Backsite\RoleController@index',
//     'as' => 'index'
// ]);

// Route::get('/backsite/role', [
//     'uses' =>  'App\Http\Controllers\Backsite\RoleController@index',
//     'as' => 'index'
// ]);
/*
1. create (ini buat nampilin halaman create)
2. store (buat engine store )
3. index (buat nampilin halaman depan)
4. destroy (buat hapus)
5. edit (buat nampilin halaman edit)
6. update (engine update)
7. show (buat nampilin halaman detail)

Route::get('/kategori', [
    'uses' => 'App\Http\Controllers\Backsite\KategoriController@index',
    'as' => 'backsite.kategori.index'
]);




Route::get('/kategori',[KategoriController::class, 'index']);


Route::get('/backsite/crud/tambah', [
    'uses' => 'App\Http\Controllers\Backsite\KategoriController@index',
    'as' => 'backsite.crud.tambah'
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

// Route::get('/backsite/role/edit', [
//     'uses' =>  'App\Http\Controllers\Backsite\RoleController@edit',
//     'as' => 'edit'
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
// Route::get('/backsite/kategori/edit', [
//     'uses' =>  'App\Http\Controllers\Backsite\KategoriController@edit',
//     'as' => 'backsite.kategori.edit'
// ]);
