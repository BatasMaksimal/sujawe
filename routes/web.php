<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\datauserController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\BlogController;

use App\Models\Catalogs;

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

// ROUTE ADMIN

Route::get('/admin/login', function () {
    return view('admin.login',[
        "title"=>"Sujawe inninawa"
    ]);
})->name('admin.login');

// Route::get('/admin/post_blog', function () {
//     return view('admin.post_blog',[
//         "title"=>"Sujawe inninawa"
//     ]);
// });

Route::get('/admin/catalogs', function () {
    $catalogs = Catalogs::all();
    return view('admin.post_blog',[
        "title"=>"Shone pager",
        "catalogs"=> $catalogs
    ]);
});

Route::get('/admin/tambah_post', function () {
    return view('admin.tambah_post.tambah',[
        "title"=>"Sujawe inninawa"
    ])->middleware('auth');
})->name('admin.tambah_post.tambah');

Route::get('/admin/tambah_user', function () {
    return view('admin.tambah_user.tambah_user',[
        "title"=>"Sujawe inninawa"
    ])->middleware('auth');
})->name('admin.tambah_user.tambah_user');

Route::resource('/admin/user', UserController::class, ['as'=>'admin']);
Route::resource('/admin/catalogs', CatalogsController::class, ['as'=>'admin']);





// WEB CATALOG

Route::get('/sujawe/home', [WebController::class, 'index'])->name('home');
Route::get('/sujawe/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/sujawe/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/sujawe/galery', [GaleryController::class, 'index'])->name('galery');
Route::get('/sujawe/blog', [BlogController::class, 'index'])->name('blog');
//CATALOGS





// ROUTE USER

Route::resource('/user/catalogs', UsersController::class, ['as'=>'users']);

Route::get('/user/tambah_post', function () {
    return view('user.tambah_post.tambah_post',[
        "title"=>"Sujawe inninawa"
    ])->middleware('auth');
})->name('user.tambah_post.tambah_post');

Route::get('password', function(){
    return Hash::make('admin');
});

//Route::resource('/login', LoginController::class);
Route::post('login',[LoginController::class, 'login'])->name('login');
Route::get('logout',[LogoutController::class, 'logout'])->name('admin.logout');
