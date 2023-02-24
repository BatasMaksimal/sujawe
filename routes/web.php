<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\datauserController;

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

Route::get('/admin/login', function () {
    return view('admin.login',[
        "title"=>"Sujawe inninawa"
    ]);
});

// Route::get('/admin/post_blog', function () {
//     return view('admin.post_blog',[
//         "title"=>"Sujawe inninawa"
//     ]);
// });

Route::get('/admin/home', function () {
    $catalogs = Catalogs::all();
    return view('admin.post_blog',[
        "title"=>"Shone pager",
        "catalogs"=> $catalogs
    ]);
});


Route::get('/admin/tambah_post', function () {
    return view('admin.tambah_post.tambah',[
        "title"=>"Sujawe inninawa"
    ]);
})->name('admin.tambah_post.tambah');

Route::get('/admin/tambah_user', function () {
    return view('admin.tambah_user.tambah_user',[
        "title"=>"Sujawe inninawa"
    ]);
})->name('admin.tambah_user.tambah_user');



Route::resource('/admin/user', UserController::class, ['as'=>'admin']);
Route::resource('/admin/catalogs', UserController::class, ['as'=>'admin']);

Route::get('password', function(){
    return Hash::make('admin');
});

//Route::resource('/login', LoginController::class);
Route::post('login',[LoginController::class, 'login'])->name('login');
Route::get('logout',[LogoutController::class, 'logout'])->name('admin.logout');