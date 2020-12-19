<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\QuestionnaireController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\Array_;

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

Route::get('/hello',function (){
    $category= \App\Models\Category::find(9);
    dd($category->getParentTree());
});


Route::get('/admin', [App\Http\Controllers\AdminController::class,'index'])->name('admin_dashboard');

Route::group(['middleware' => ['admin']], function () {
    Route::resource('users', UserController::class);
    Route::resource('questionnaires', QuestionnaireController::class);
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
