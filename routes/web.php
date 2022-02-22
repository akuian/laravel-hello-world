<?php

use App\Http\Controllers\AboutController;
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

//Practicum 3
Route::get('/', function () {
    return view('home');
});
Route::prefix('category')->group(function () {
    Route::get('/', function () {
        return view('category');
    });
    Route::get('/marbel-edu-games', function () {
        echo ('games');
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        echo ('friend and kids games');
    });
    Route::get('/riri-story-books', function () {
        echo ('story books');
    });
    Route::get('/kolak-kids-songs', function () {
        echo ('kolak-kids');
    });
});
Route::get('/news/{new?}', function ($new = 'educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19') {
    return $new;
});
Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        echo ('Careers');
    });
    Route::get('/magang', function () {
        echo ('Internship');
    });
    Route::get('/kunjungan-industri', function () {
        echo ('Industry');
    });
});
Route::get('/about-us', [AboutController::class, 'aboutus']);
//Practicum 2
// Route::get('/hello', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);
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
