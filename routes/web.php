<?php

use App\Http\Controllers\proyecto;
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

Route::get('/', [proyecto::class, 'index']);
Route::get('login', [proyecto::class, 'login']);

// Route::get('home', [proyecto::class, 'home']);
Route::get('cliente/create', [proyecto::class, 'create']);
Route::get('cliente/micta', [proyecto::class, 'micta']);
Route::get('cliente/compras',[proyecto::class, 'compras']);
Route::get('cliente/realizarcompras',[proyecto::class, 'realizarcompras']);
Route::get('cliente/informacion',[proyecto::class, 'informacion']);
Route::get('cliente/consulta',[proyecto::class, 'consulta']);


Route::get('adm/home_adm',[proyecto::class, 'home_adm']);

Route::get('usuario/home_user',[proyecto::class, 'home_user']);