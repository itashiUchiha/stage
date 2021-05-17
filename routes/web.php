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
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DemandeController;
use App\Http\Middleware;

use App\Http\Controllers\uploadFile;

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
Route::get('/signup',[SignupController::class,"get"])->middleware("is_already_logged");
Route::post('/signup',[SignupController::class,"post"]);
Route::get('/userDemande',[UserDemandeController::class,"index"]);
//Route::get('/client',[ClientController::class,"get"])->middleware("checkClient");
Route::post('/client',[ClientController::class,"post"]);
//Route::get('/service',[ServiceController::class,"get"]);
Route::get('/client',[SignupController::class,"client"])->middleware("is_logged");
Route::get('/logout',[SignupController::class,"logout"]);
Route::get('/demandeUser',[DemandeController::class,"showClient"])->middleware("is_logged");
//Route::get('/service',[DemandeController::class,"showService"]);
Route::post('/service',[DemandeController::class,"postService"]);
Route::get('/uploadFile',[uploadFile::class,"update"]);
Route::post('/uploadFile',[uploadFile::class,"succes"]);

Route::get('/service',[DemandeController::class,"showTable"]);
Route::get('/UneDemande/{id}',[ServiceController::class,"getDemandeById"]);
Route::get('/reponseDemande/{id}',[ServiceController::class,"reponseDemande"]);
Route::post('/SendReponseDemande',[ServiceController::class,"SendReponseDemande"])->name("send_reponse");
Route::get('/download/{fichier}',[ServiceController::class,"download"]);
//Route::post('/download{fichier}',[ServiceController::class,"download"]);



Route::get('/about', function () {
    return view('about');   
});

