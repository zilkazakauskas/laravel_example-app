<?php

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
require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/newTest', function (){
    return view('new');
});

Route::get('/main', function(){
    return view('main');
});

Route::get('/search', function(){
    return view('search');
});

Route::get('/materials/{category?}', function($category=null){
    return view('materials', ['category'=> $category]);
});

Route::get('/requests', function(){
    return view('requests');
});

// Route::get('/reset-password', function(){
//     return view('reset-password');
// });

// Route::get('/forgot-password', function(){
//     return view('forgot-password');
// });