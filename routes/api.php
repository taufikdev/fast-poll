<?php

use App\Http\Controllers\AccountController;
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


// Route::apiresource('/account', AccountController::class);
Route::get('/account', [AccountController::class, 'index']);
Route::post('/account', [AccountController::class, 'store']);
Route::get('/account/{id_acc}', [AccountController::class, 'show']);
// Route::post('/account/update/{id_acc}', [AccountController::class, 'show']);


