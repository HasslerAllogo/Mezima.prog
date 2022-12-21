<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetMezimaController;
use App\Http\Controllers\TacheMezimaController;

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
    return view('welcome');
});
Route::get('/Vu', function () {
    return view('projet\essaie');
});

Route::resource('projet', ProjetMezimaController::class);
Route::resource('tache', TacheMezimaController::class);