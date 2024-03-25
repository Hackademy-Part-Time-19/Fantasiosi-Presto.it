<?php

use App\Http\Controllers\AnnouncementsController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\RevisorController;
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
//Rotta Welcome
Route::get('/',[FrontController::class, 'welcome'])->name('welcome');



//Rotta Category 
Route::get('/category/announcement/{category}',[FrontController::class,'categoryShow'])->name('category.show');



//Rotte Announcement
Route::get('announcements', [AnnouncementsController::class, 'index'])->name('announcements.index');
Route::resource('announcements', AnnouncementsController::class);
Route::middleware(['auth'])->group(function () {
    Route::get('/announcement/{announcement}',[FrontController::class,'show'])->name('announcement.show');
    Route::resource('announcements', AnnouncementsController::class)->only('create');
   
});



//Rotte Revisor
Route::middleware(['isRevisor'])->group(function(){
// Home revisore
Route::get('/revisor/home',[RevisorController::class,'index'])->name('revisor.index');

//Accetta annuncio
Route::patch('/accetta/annuncio/{announcement}',[RevisorController::class,'acceptAnnouncement'])->name('revisor.accept');

//Rifiuta annuncio
Route::patch('/rifiuta/annuncio/{announcement}',[RevisorController::class,'rejectAnnouncement'])->name('revisor.reject');
});

