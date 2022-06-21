<?php

use Illuminate\Support\Facades\Auth;
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



Route::get('/', [\App\Http\Controllers\BienController::class, 'index' ])->name('bien');

Auth::routes();

// c'est lorsqu'on est connécte que cela s'affiche
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('users','UserController');
});

Route::get('/acceuil', [\App\Http\Controllers\AcceuilController::class, 'index'])->name('acceuil');

Route::get('/consultation', [\App\Http\Controllers\ConsultationController::class, 'consul'])->name('consultations');

Route::get('/detailpage', [\App\Http\Controllers\DetailController::class, 'detail'])->name('detailpage');

Route::get('/formulaire', [\App\Http\Controllers\FormulaireController::class, 'index'])->name('formulaire_car');

Route::post('/carsave', [\App\Http\Controllers\FormulaireController::class, 'store'])->name('car');

Route::get('/car/{car}', [\App\Http\Controllers\FormulaireController::class, 'affichecar'])->name('affiche');

Route::resource('article', '\App\Http\Controllers\ReservationController');

// Route::get('/réservée',[\App\Http\Controllers\ReservationController::class, 'reserver'])->name('reserver');

// Route::get('/non-réservée',[\App\Http\Controllers\ReservationController::class, 'non_reserver'])->name('non_reserver');

// Route::post('/car/{reservations}',[\App\Http\Controllers\DetailController::class, 'reservations'])->name('reservation');




