<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\ComicController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\UserController as ClientUserController;
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
Route::middleware(['guest'])->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/login', [ClientUserController::class, 'login'])->name('login');
    Route::get('/signup', [ClientUserController::class, 'signup'])->name('signup');
    Route::get('/list', [ComicController::class, 'list'])->name('list-comics');
    Route::get('/blogs', [BlogController::class, 'blogs'])->name('blogs');
    Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog');

});
// admin routers
Route::prefix('backend')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('admin.home');
});

Route::get('/404', function () {
    return view('404');
});