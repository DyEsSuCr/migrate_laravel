<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\MyStoryTrainingController;
use App\Http\Controllers\LearningPathMedalController;
use App\Http\Controllers\LearningPathUserController;
use App\Http\Controllers\RentedProductionController;
use App\Http\Controllers\AsyncSessionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\TenantController;

Route::apiResources([
    'users' => UserController::class,
    'chapters' => ChapterController::class,
    'productions' => ProductionController::class,
    'my-story-trainings' => MyStoryTrainingController::class,
    'learning-path-medals' => LearningPathMedalController::class,
    'learning-path-users' => LearningPathUserController::class,
    'rented-productions' => RentedProductionController::class,
    'async-sessions' => AsyncSessionController::class,
    'roles' => RoleController::class,
    'companies' => CompanyController::class,
    'tenants' => TenantController::class
]);

Route::get('/', function () {
    return view('welcome');
});
