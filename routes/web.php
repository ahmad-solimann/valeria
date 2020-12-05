<?php

use App\Http\Controllers\AdminController;
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

Route::get('/admin', [App\Http\Controllers\AdminController::class,'index'])->name('admin_dashboard');
Route::resource('users', UserController::class);

Route::get('/hello', function (){
    $string = file_get_contents("C:\Users\Ahmad\Desktop\categoriesfinal.json");
    $data = json_decode($string, true);
    for($i=0; $i< sizeof($data);$i++){
        //print_r($data[0]);
        foreach($data[$i] as $category => $value){
            foreach($data[$i][$category] as $sbcategory => $v2){
                foreach($v2 as $sbcategory2 => $v3){
                    print_r($v3);
                }
            }
        }
    }
    return;

});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
