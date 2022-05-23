<?php

use Illuminate\Support\Facades\Route;
use App\Models\posteo;
use App\Models\menu;
use App\Models\ilustraciones_dibujos;
use App\Models\comics_mangas;
use App\Models\obras_novelas;
use App\Models\users;
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
    return view('welcome');
});

Route::get('/users', function () {
    return users::All();
});

Route::get('/menu', function () {
    return menu::All();
});

Route::get('/posteo', function () {
    return posteo::All();
});

Route::get('/ilustraciones_dibujos', function () {
    return ilustraciones_dibujos::All();
});

Route::get('/comics_mangas', function () {
    return comics_mangas::All();
});

Route::get('/obras_novelas', function () {
    return obras_novelas::All();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
