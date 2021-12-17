<?php

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


Route::get('/', [App\Http\Controllers\SiteController::class, 'accueil'])->name('accueil');
Route::get('/devis', [App\Http\Controllers\SiteController::class, 'devis'])->name('devis');
Route::get('/diagnostic_de_etat_du_patrimoine', [App\Http\Controllers\SiteController::class, 'activite_1'])->name('activite_1');
Route::get('/entretien_toitures', [App\Http\Controllers\SiteController::class, 'activite_2'])->name('activite_2');
Route::get('/recherche_infiltrations', [App\Http\Controllers\SiteController::class, 'activite_3'])->name('activite_3');
Route::get('/refection_etancheite_toitures_terrasses', [App\Http\Controllers\SiteController::class, 'activite_4'])->name('activite_4');
Route::get('/securisation_des_toitures_et_balcons', [App\Http\Controllers\SiteController::class, 'activite_5'])->name('activite_5');
Route::get('/fSFSE45Erer63ezéEze33éZez', [App\Http\Controllers\SiteController::class, 'index'])->name('home');

