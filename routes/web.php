<?php

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



Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/webcontent', [App\Http\Controllers\WebContentController::class, 'index'])->name('webcontent');

    Route::put('herocontent/{id}/update', [App\Http\Controllers\HeroController::class, 'update'])->name('contentweb.updateHero');
    Route::put('uscontent/{id}/update', [App\Http\Controllers\UsController::class, 'update'])->name('contentweb.updateUs');
    Route::put('reasons/{id}/update', [App\Http\Controllers\ReasonsController::class, 'update'])->name('contentweb.updateReasons');
    Route::put('industrycontent/{id}/update', [App\Http\Controllers\InduestriesController::class, 'update'])->name('contentweb.updateIndustry');
    Route::put('contact/{id}/update', [App\Http\Controllers\ContactController::class, 'update'])->name('contentweb.updateContact');

    Route::put('faqscontent/{id}/update', [App\Http\Controllers\FaqsController::class, 'update'])->name('contentweb.updateFaqs');
    Route::post('faqscontent/create', [App\Http\Controllers\FaqsController::class, 'store'])->name('contentweb.storeFaqs');
    Route::delete('faqscontent/{id}/delete', [App\Http\Controllers\FaqsController::class, 'destroy'])->name('contentweb.deleteFaqs');

    Route::get('/news', [App\Http\Controllers\NewsController::class, 'index'])->name('webnews');

    Route::put('news/{id}/update', [App\Http\Controllers\NewsController::class, 'update'])->name('contentweb.updateNews');
    Route::post('news/create', [App\Http\Controllers\NewsController::class, 'store'])->name('contentweb.storeNews');
    Route::delete('news/{id}/delete', [App\Http\Controllers\NewsController::class, 'destroy'])->name('contentweb.deleteNews');
});

