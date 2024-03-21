<?php

use App\Http\Controllers\AnnouncementsController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[FrontController::class, 'welcome'])->name('welcome');

Route::get('/announcement/index',[FrontController::class, 'index'])->name('index');

Route::get('/announcement/{category}',[FrontController::class,'categoryShow'])->name('category.show');

Route::get('/announcement/{announcement}',[FrontController::class,'show']
)->name('dettaglio');


Route::middleware('auth')->group(function(){
    Route::resource('announcements',AnnouncementsController::class);
});