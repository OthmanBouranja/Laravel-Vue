<?php

use App\Http\Controllers\ProductController;
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
    return view('home');
});

// Route::middleware('auth','verified')->group(function(){

// });

Route::resource('collectives', 'CollectiveController');
Route::resource('questions', 'QuestionController');

// Route::get('/index',[ProductController::class,'index'])->name('all.product');
