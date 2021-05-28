<?php

use App\Http\Controllers\NoteController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/note',[NoteController::class, 'all']); //pegar todos os dados
Route::get('/notes/{id}',[NoteController::class, 'dados1']); //pegar dados especifico
Route::post('/note',[NoteController::class, 'adicionar']); //rota de adicionar
Route::put('/note/edit/{id}',[NoteController::class, 'edit']);
Route::delete('/note/delete/{id}',[NoteController::class,  'delete']);
