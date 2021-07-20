<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
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
Route::get('/example', function () {
    return view('example');
});
// Route::resource('posts', 'PostController');

Route::get('/posts', function () {
    return view('posts.create');
});
Route::get('/', [FileController::class, 'index']);

Route::post('/upload', [FileController::class, 'upload'])->name('upload');