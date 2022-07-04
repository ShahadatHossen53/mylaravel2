<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\mycontroler;

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


Route::get('/', function () {
    return view('welcome');
})->name('home');



Route::get('/Details/{id}', function ($id) {

    $id = Crypt::decryptString($id);
    echo "$id";
})->name('user.details');


Route::post('/user', function (Request $request) {

    echo $request->password;
})->name('user.store');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/Profile', function () {
//     return view('profile');
// })->middleware(['auth'])->name('profile.me');

Route::get('/Profile', function () {
    // Only verified users may access this route...
    return view('profile');
})->middleware(['auth', 'verified'])->name('profile.me');



Route::get('/laravel', function () {
    return view('laravel');
})->middleware('auth');


Route::post('/user', [mycontroler::class, 'hasing'])->name('user.hashing');



require __DIR__.'/auth.php';
