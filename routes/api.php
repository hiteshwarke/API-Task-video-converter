<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\APIBaseController;
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


/**
 *  RESTful API Development
 */
Route::get('get-movies', [APIBaseController::class, 'getAllMovies']);
Route::post('save-movies', [APIBaseController::class, 'saveMovie']);
Route::get('get-movie/{id}', [APIBaseController::class, 'getMoviesById']);
Route::patch('update-movie/{id}', [APIBaseController::class, 'updateMoviesByID']);
Route::delete('remove-movie/{id}', [APIBaseController::class, 'removeMovies']);
