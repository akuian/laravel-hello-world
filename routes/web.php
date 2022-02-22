<?php

use App\Http\Controllers\PageController;
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
Route::get('/hello', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);
//Practicum 1
// Route::get('/hello', function () {
//     echo ('Hi! Welcome To Laravel');
// });
// Route::get('/about', function () {
//     echo('2041720210 <br>');
//     echo('Hafiyyan Faza Pratama <br>');
//     echo('TI-2I');
// });
// Route::get('/articles/{id}', function ($id) {
//     echo('This is article page with id '.$id);
// });
