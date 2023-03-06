<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view();
});

Route::get('/about', function(){
    return view('about',[
        "judul" => "About",
        "nama" => "Ira Amelia",
        "Nim" => "E41210501",
        "image" => "polije.png"
    ]);
});
Route::get('/dashboard', function(){
    return view('dashboard',[
        "judul" => "Dashboard"
    ]);
});
Route::get('/blog', [PostController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

// Route::group(['namespace' => 'Backend'], function()
// {
//     Route::resource('home', 'HomeController');
// });

// Route::get('/home', function(){
//     return view('backend.template');
// });



