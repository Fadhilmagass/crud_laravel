<?php

use App\Http\Controllers\BooksController;
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
//     return view('welcome');
// });

Route::get('/', [BooksController::class, 'index']);
Route::get('/create', [BooksController::class, 'create']);
Route::post('/store', [BooksController::class, 'store']);
Route::get('/{id}/edit', [BooksController::class, 'edit']);
Route::put('/{id}', [BooksController::class, 'update']);
Route::delete('/{id}', [BooksController::class, 'destroy']);