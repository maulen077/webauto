<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactsController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/list', [ListController::class, 'index'])->name('list');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/post/{id}', [ListController::class, 'show'])->name('post');
Route::get('/contacts', [ContactsController::class, 'show'])->name('contacts');
Route::post('/contacts', [ContactsController::class, 'submit'])->name('contacts.submit');
