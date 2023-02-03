<?php

use App\Models\Articles;
use Illuminate\Support\Facades\Route;
use App\Models\TypeArticles;
use Illuminate\Support\Facades\Auth;



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

Route::get('/articles', function () {
    return Articles::with("type")->paginate(5);
});

Route::get('/type', function () {
    return TypeArticles::with("articles")->paginate(5);
});
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
