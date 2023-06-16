<?php

use App\Http\Controllers\FactureController;
use App\Http\Controllers\G_clientController;
use App\Http\Controllers\G_pageController;
use Illuminate\Support\Facades\Route;
use illuminate\Support\Facades\Auth;

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




Route::prefix('admin')->group(function(){
    Route::resource('/dashbord', G_pageController::class);
    // Route::resource('/dashbord/client', G_clientController::class);
});

Auth::routes();


// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('Home');
})->name('home');

route::prefix('facture')->middleware('auth')->group(function(){
    route::get('/liste', [FactureController::class, 'index'])->name('facture.liste');
    route::get('/create', [FactureController::class, 'create'])->name('facture.create');
    route::post('/store', [FactureController::class, 'store'])->name('facture.store');
    route::get('/{id}/edit', [FactureController::class, 'edit'])->name('facture.edit');
    route::put('/{id}', [FactureController::class, 'update'])->name('facture.update');
    Route::get('/resultat', [FactureController::class, 'show'])->name('facture.resultat');
    route::delete('/destroy/{id}', [FactureController::class, 'destroy'])->name('facture.destroy');
});


// route::post('/facture/store', [FactureController::class, 'store'])->name('facture.store')->middleware('auth');
// route::get('/facture/liste', [FactureController::class, 'index'])->name('facture.liste')->middleware('auth');
// route::get('/facture/{$id}/edit', [FactureController::class, 'edit'])->name('facture.edit')->middleware('auth');
// route::delete('/facture/destroy/{$id}', [FactureController::class, 'destroy'])->name('facture.destroy')->middleware('auth');

// Route::controller(FactureController::class)->group(function(){
//     Route::get('facture/Ajouter','store')->middleware('auth')->name('facture.store');
//     Route::get('facture/liste','index')->middleware('auth')->name('facture.liste');
//     Route::get('facture/edit/{id}','edit')->middleware('auth')->name('facture.edit');
//     Route::get('/facture/destroy/{id}','destroy')->middleware('auth')->name('facture.destroy');
// });
