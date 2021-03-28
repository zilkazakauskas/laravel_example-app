<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MaterialController;
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

Route::get('/users', [UserController::class, 'index']);

// Route::get('/reset-password', function(){
//     return view('reset-password');
// });

// Route::get('/forgot-password', function(){
//     return view('forgot-password');
// });

// Route::get('/insertTest',[MaterialController::class, 'insertMaterial']);
// Route::post('/tryToInsert',[MaterialController::class, 'insertMaterial']);

// Route::get('/all_materials', [MaterialController::class, 'showMaterials']);

Route::get('/insert_material', [MaterialController::class, 'selectTypeAndCategory']);
