<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/produits/ajout',[\App\Http\Controllers\ajoutController::class,'add'])->middleware('auth.basic');
Route::get('/produits',[\App\Http\Controllers\listeController::class,'TabDonnees'])->middleware('auth.basic');

Route::get('/produits/{id}',[\App\Http\Controllers\produitController::class,'AfficherPageProduit'])->middleware('auth.basic');
Route::put('/produits/{id}',[\App\Http\Controllers\modificationController::class,'modifier'])->middleware('auth.basic');
Route::delete('/produits/{id}',[\App\Http\Controllers\apiController::class,'delete'])->middleware('auth.basic');

Route::put('/produits/{id}/{nouvelleQuantite}',[\App\Http\Controllers\apiController::class,'changerQuantite'])->middleware('auth.basic');
