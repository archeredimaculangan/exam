<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthenticateSession;

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
    return view('auth/login');
});

//Auth::routes();

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('loginpage');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/factorial', [App\Http\Controllers\Auth\LoginController::class, 'factorial'])->name('factorial');
Route::get('/landing', function () {
    $url =  "https://super7tech.com/web_developer_exam_sr/json/slideshow.json";
    $slides = json_decode(file_get_contents($url),true);
    // dd($slides);
    return view('landing',compact('slides'));
})->name('landing');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::prefix('user')->group(function () {
        Route::get('create', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');
        Route::post('store', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
        Route::get('edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
        Route::post('update', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
        Route::get('delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('user.delete');
    });
 
});