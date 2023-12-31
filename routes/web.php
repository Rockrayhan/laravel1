<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::post('/contact', [HomeController::class, 'store']);
Route::get('/allcontacts', [HomeController::class, 'contactList']);
Route::get('/allcontacts/delete/{id}', [HomeController::class, 'delete']);
Route::get('/allcontacts/edit/{id}', [HomeController::class, 'edit']);
Route::post('/allcontacts/update/{id}', [HomeController::class, 'update']);
