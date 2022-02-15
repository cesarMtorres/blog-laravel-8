<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntryController;
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
Route::get('entries', [EntryController::class, 'index']);
Route::get('entries/{id}', [EntryController::class,'show']);
Route::post('entries', [EntryController::class, 'store']);
Route::put('entries/{id}', [EntryController::class, 'update']);
Route::delete('entries/{id}', [EntryController::class, 'delete']);
