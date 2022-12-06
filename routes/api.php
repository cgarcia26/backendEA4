<?php

use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolController;
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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('subject', [SubjectController::class, 'allSubject']);

Route::get('subject/{id}', [SubjectController::class, 'findSubjectId']);

Route::post('subject/store', [SubjectController::class, 'store']);

Route::post('subject/{id}/update', [SubjectController::class, 'update']);

Route::delete('subject/{id}/destroy', [SubjectController::class, 'destroy']);

Route::get('semester', [SemesterController::class, 'allSemester']);

Route::get('semester/{id}', [SemesterController::class, 'findSemesterId']);

Route::post('semester/store', [SemesterController::class, 'store']);

Route::post('semester/{id}/update', [SemesterController::class, 'update']);

Route::delete('semester/{id}/destroy', [SemesterController::class, 'destroy']);

Route::get('user', [UserController::class, 'allUser']);

Route::post('user/store', [UserController::class, 'store']);

Route::post('user/login', [UserController::class, 'login']);

Route::get('rol', [RolController::class, 'allRol']);
