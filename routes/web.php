<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;


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

Route::get('/',[PageController::class, 'index']);
Route::get('/article/{id}', [PageController::class, 'detailArticles']);
Route::get('/author/{id}', [PageController::class, 'authorArticles']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::middleware('guest')->group(function() {
    Route::get('/login', [AuthController::class, 'showLogin'] )->name('login');
    Route::post('/login/submit', [AuthController::class, 'submitLogin']);
});

Route::middleware('auth')->group(function() {
    Route::get('/admin',[AdminController::class, 'dashboardAdmin']);
    Route::get('/logout',[AuthController::class, 'doLogout']);

    Route::get('/admin/users', [UserController::class, 'index']);
    Route::get('/admin/users/add', [UserController::class, 'addUsers']); //menampilkan atau menambahkan halaman artikel
    Route::post('/admin/users/store', [UserController::class, 'storeUsers']); //memasukkan data kedatabase

    Route::get('/admin/users/edit/{id}', [UserController::class, 'editUsers']);
    Route::post('/admin/users/update/{id}', [UserController::class, 'updateUsers']);

    Route::get('/admin/users/delete/{id}', [UserController::class, 'deleteUsers']);

    Route::get('admin/articles', [ArticleController::class, 'index']);
    Route::get('admin/articles/add', [ArticleController::class, 'addArticles']);  //menampilkan atau menambahkan halaman artikel
    Route::post('admin/articles/store', [ArticleController::class, 'storeArticles']); //memasukkan data kedatabase

    Route::get('admin/articles/edit/{id}', [ArticleController::class, 'editArticles']);
    Route::post('admin/articles/update/{id}', [ArticleController::class, 'updateArticles']);

    Route::get('admin/articles/delete/{id}', [ArticleController::class, 'deleteArticles']);
});

?>