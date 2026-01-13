<?php

use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StudyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Http;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('projects', [ProjectController::class, 'index'])->name('api.projects');
Route::get('experiences', [ExperienceController::class, 'index'])->name('api.experiences');
Route::get('studies', [StudyController::class, 'index'])->name('api.studies');
