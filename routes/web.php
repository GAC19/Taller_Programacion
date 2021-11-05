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

Route::get('cliente/micta', [proyecto::class, 'micta']);
Route::get('cliente/compras',[proyecto::class, 'compras']);
