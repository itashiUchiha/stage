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
use App\Http\Controllers\UserController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UserDemandeController;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
   return view('welcome');
    
});
/* Route::get('/user',function(){
    $array['name1']="john";
    $array['name2']="cheikh";
    $array['name3']="sadibou";
    $array['name4']="sidibe";
    return view("user",$array);
});
 */
Route::get('/user',[UserController::class,"index"]);
Route::get('/signup',[SignupController::class,"get"]);
Route::post('/signup',[SignupController::class,"post"]);
Route::get('/userDemande',[UserDemandeController::class,"index"]);
Route::get('/client',[ClientController::class,"index"]);

Route::get('/about', function () {
    return view('about');   
});

