<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HegaldiakController;

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
Route::get('/hegaldiak', function () {
    return view('hegaldiak.index');
})->name('hegaldiak');

Route::get('/hegaldiak', [HegaldiakController::class, 'showAll'])->name('/hegaldiak/index');

Route::patch('/hegaldiak/{id}', [HegaldiakController::class, 'update'])->name('hegaldiak-update');