<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return "Página inicio";
})->name("inicio");
Route::get('publicaciones', [PostController::class, "index"])->name("publications.index");
Route::get('publicaciones/create', [PostController::class, "create"])->name("publications.create");
Route::post('publicaciones', [PostController::class, "add"])->name("publications.add");
Route::get('publicaciones/{id}', [PostController::class, "getPublication"])->name("publications.publication");
