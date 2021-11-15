<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\FormationController;
use \App\Http\Controllers\ChapterController;
use \App\Http\Controllers\ContentController;
use \App\Http\Controllers\UserController;

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

Route::get('/', [FormationController::class, 'index'])->name('formationsList');
Route::get('/category/{category}', [FormationController::class, 'formationCategory'])->name('formationsListCategory');
Route::get('/formations/{id}', [FormationController::class, 'details'])->name('formationsDetails');

Route::get('/mes-formations', [FormationController::class, 'userFormations'])->middleware(['auth'])->name('dashboard');
Route::get('/mes-chapitres', [ChapterController::class, 'userChapters'])->middleware(['auth'])->name('user-chapters');
Route::get('/mes-contenues', [ContentController::class, 'userContents'])->middleware(['auth'])->name('user-contents');
Route::get('/mon-compte', [UserController::class, 'accountInfos'])->middleware(['auth'])->name('account');

Route::get('/user/formation/{id}', [FormationController::class, 'updateFormationDetails'])->name('update-formation-details');
Route::get('/user/nouvelle-formation', [FormationController::class, 'newFormation'])->name('new-formation');
Route::put('/user/formation/update/picture/{id}', [FormationController::class, 'updateFormationPicture'])->name('update-formation-picture');
Route::put('/user/formation/update/{id}', [FormationController::class, 'updateFormation'])->name('update-formation');
Route::delete('/user/formation/delete/{id}', [FormationController::class, 'deleteFormation'])->name('delete-formation');

Route::post('/user/formation/store', [FormationController::class, 'storeFormation'])->name('store-formation')->middleware('auth');
require __DIR__.'/auth.php';
