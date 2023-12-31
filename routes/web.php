<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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
//     return view('welcome');
// });

// best practice
Route::get('/', [BookController::class, 'welcome'])->name('welcome');

Route::get('/book/{id}', [BookController::class, 'bookById'])->name('bookById');

Route::get('/category/{id}', [BookController::class, 'categoryById'])->name('categoryById');

Route::get('/publisher', [BookController::class, 'publisher'])->name('publisher');

Route::get('/contact', [BookController::class, 'contact'])->name('contact');

// Route::{http method}('url', [Controller::class, 'nama func di controller']);
