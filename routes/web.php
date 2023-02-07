<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\CatalogsController;

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

Route::get('/admin/home', function () {
    return view('admin.main',[
        "title"=>"Sujawe inninawa"
    ]);
});

Route::get('/', function(){

});
// Route::get('/about', function () {
//     return view('about',[
//         "title"=>"About",
//         "name"=>" Javier",
//         "email"=>"sultan.javier@gmail.com",
//         "image"=>"sultan.jpg"
//     ]);
// });
// Route::get('/blog', function () {
//     return view('posts',[
//         "title"=>"Posts"
//     ]);
// });

Route::resource('/catalogs', CatalogsController::class);
