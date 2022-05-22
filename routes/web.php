<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Rifqi Raehan Hermawan",
        "email" => "rifqiraehan86@gmail.com",
        "image" => "logo-mashu.png"
    ]);
});



Route::get('/blog', [PostController::class, 'index']);
//Halaman Single post
Route::get('posts/{slug}', [PostController::class, 'show'] );