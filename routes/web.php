<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\NombreCandidatController;
use App\Http\Controllers\CandidatSexe;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\NombreDeCandidatParFormation;
use App\Http\Controllers\NombreDeFormationParRef;
use App\Http\Controllers\ReferentielController;
use App\Http\Controllers\TypeController;

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

Route::get('/', function () {
    return view('candidat.index');
});

Route::get('/candidat/index', [CandidatController::class, 'index'])->name('candidat.list');
Route::get('/candidat/create', [CandidatController::class, 'create'])->name('candidat.create');
Route::post('/store1', [CandidatController::class, 'store']);
Route::get('/candidatStats', [CandidatController::class, 'candidatStats'])->name('candidatStats');
Route::get('/nbCandidatFormation', [CandidatController::class, 'nbCandidatFormation'])->name('nbCandidatFormation');





Route::get('/formation/create', [FormationController::class, 'create'])->name('formation.list');
Route::get('/formation/index', [FormationController::class, 'index'])->name('formation.index');
Route::post('/store2', [FormationController::class, 'store']);

Route::get('/referentiel/create', [ReferentielController::class, 'create'])->name('referentiel.create');
Route::get('/referentiel/index', [ReferentielController::class, 'index'])->name('referentiel.list');
Route::post('/store3', [ReferentielController::class, 'store']);
Route::get('/nbFormationReferentiel', [ReferentielController::class, 'nbFormationReferentiel'])->name('nbFormationReferentiel');



Route::get('/type/create', [TypeController::class, 'create'])->name('type.create');
Route::get('/type/index', [TypeController::class, 'index'])->name('type.list');
Route::post('/store4', [TypeController::class, 'store']);

//Route::get('/candidat/formation/create', [CandidatFormationController::class, 'create'])->name('candidatformation');
Route::post('/store5', [CandidatFormationController::class, 'store']);

Route::get('/nombre/candidat/formation', [NombreCandidatController::class, 'index'])->name('nombredecandidatparformation');
Route::get('/nombre/formation/referentiel', [NombreDeFormationParRef::class, 'index'])->name('nombredeformationparref');
Route::get('/repartition/candidat/sexe', [CandidatController::class, 'candidatStats'])->name('candidatparsexe');
Route::get('/formationsByType', [FormationController::class, 'formationsByType'])->name('formationsByType');

