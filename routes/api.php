<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
use App\Http\Controllers\EventController;


Route::post('/events', [EventController::class, 'store']); // Créer un nouvel événement
Route::put('/events/{id}', [EventController::class, 'update']); // Mettre à jour un événement existant
Route::get('/events', [EventController::class, 'index']); // Lister tous les événements
Route::get('/events/{id}', [EventController::class, 'show']); // Voir un événement spécifique


Route::post('/demande-evenement', [EventController::class, 'store'])->name('demande-evenement.store');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
