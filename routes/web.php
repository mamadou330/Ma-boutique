<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome')->name('welcome');
// });
Route::view('/', 'welcome')->name('welcome');
Route::view('about', 'pages.about')->name('about');


Route::resource('client', ClientController::class);
Route::resource('contact', ContactController::class);

//Auth::routes();
Route::get('email', function(){
    return new ContactMail(['name' => "Mamadou ", 'email'=> 'masaliou2020@gmail.com', 'message'=> 'Je suis un message de teste']);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
