<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\{
    UserController,
    ChapterController,
    ProductionController,
    MyStoryTrainingController,
    LearningPathMedalController,
    LearningPathUserController,
    RentedProductionController,
    AsyncSessionController,
    RoleController,
    CompanyController,
    TenantController
};

use App\Http\Controllers\v2\{
    UserController as V2UserController,
    ChapterController as V2ChapterController,
    ProductionController as V2ProductionController,
    MyStoryTrainingController as V2MyStoryTrainingController,
    LearningPathMedalController as V2LearningPathMedalController,
    LearningPathUserController as V2LearningPathUserController,
    RentedProductionController as V2RentedProductionController,
    AsyncSessionController as V2AsyncSessionController,
    RoleController as V2RoleController,
    CompanyController as V2CompanyController,
    TenantController as V2TenantController,
};

Route::prefix('v1')->group(function () {
    Route::apiResources([
        'users' => UserController::class,
        'chapters' => ChapterController::class,
        'productions' => ProductionController::class,
        'my-story-trainings' => MyStoryTrainingController::class,
        'learning-path-medals' => LearningPathMedalController::class,
        'learning-path-users' => LearningPathUserController::class,
        'rented-productions' => RentedProductionController::class,
        'async-sessions' => AsyncSessionController::class,
    ]);
});

Route::prefix('v2')->group(function () {
    Route::apiResources([
        'users' => V2UserController::class,
        'chapters' => V2ChapterController::class,
        'productions' => V2ProductionController::class,
        'my-story-trainings' => V2MyStoryTrainingController::class,
        'learning-path-medals' => V2LearningPathMedalController::class,
        'learning-path-users' => V2LearningPathUserController::class,
        'rented-productions' => V2RentedProductionController::class,
        'async-sessions' => V2AsyncSessionController::class,
        'roles' => V2RoleController::class,
        'companies' => V2CompanyController::class,
        'tenants' => V2TenantController::class
    ]);
});

Route::get('/', function () {
    return view('welcome');
});
