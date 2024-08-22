<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HeadmasterController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisiMissionController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function(){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/authenticate', [AuthController::class, 'authenticate']);
});

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/about', [AboutController::class, 'index']);
    Route::get('/about/edit/{about}', [AboutController::class, 'edit']);
    Route::post('/about/update/{about}', [AboutController::class, 'update']);

    Route::get('/major', [MajorController::class, 'index']);
    Route::get('/major/create', [MajorController::class, 'create']);
    Route::post('/major/store', [MajorController::class, 'store']);
    Route::get('/major/show/{major}', [MajorController::class, 'show']);
    Route::get('/major/edit/{major}', [MajorController::class, 'edit']);
    Route::post('/major/update/{major}', [MajorController::class, 'update']);
    Route::get('/major/destroy/{major}', [MajorController::class, 'destroy']);

    Route::get('/teacher', [TeacherController::class, 'index']);
    Route::get('/teacher/create', [TeacherController::class, 'create']);
    Route::post('/teacher/store', [TeacherController::class, 'store']);
    Route::get('/teacher/show/{teacher}', [TeacherController::class, 'show']);
    Route::get('/teacher/edit/{teacher}', [TeacherController::class, 'edit']);
    Route::post('/teacher/update/{teacher}', [TeacherController::class, 'update']);
    Route::get('/teacher/destroy/{teacher}', [TeacherController::class, 'destroy']);

    Route::get('/headmaster', [HeadmasterController::class, 'index']);
    Route::get('/headmaster/edit/{headmaster}', [HeadmasterController::class, 'edit']);
    Route::post('/headmaster/update/{headmaster}', [HeadmasterController::class, 'update']);

    Route::get('/visi-mission', [VisiMissionController::class, 'index']);
    Route::get('/visi-mission/create', [VisiMissionController::class, 'create']);
    Route::post('/visi-mission/store', [VisiMissionController::class, 'store']);
    Route::get('/visi-mission/show/{visiMission}', [VisiMissionController::class, 'show']);
    Route::get('/visi-mission/edit/{visiMission}', [VisiMissionController::class, 'edit']);
    Route::post('/visi-mission/update/{visiMission}', [VisiMissionController::class, 'update']);
    Route::get('/visi-mission/destroy/{visiMission}', [VisiMissionController::class, 'destroy']);

    Route::get('/announcement', [AnnouncementController::class, 'index']);
    Route::get('/announcement/create', [AnnouncementController::class, 'create']);
    Route::post('/announcement/store', [AnnouncementController::class, 'store']);
    Route::get('/announcement/show/{announcement}', [AnnouncementController::class, 'show']);
    Route::get('/announcement/edit/{announcement}', [AnnouncementController::class, 'edit']);
    Route::post('/announcement/update/{announcement}', [AnnouncementController::class, 'update']);
    Route::get('/announcement/destroy/{announcement}', [AnnouncementController::class, 'destroy']);

    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/create', [UserController::class, 'create']);
    Route::post('/user/store', [UserController::class, 'store']);
    Route::get('/user/show/{user}', [UserController::class, 'show']);
    Route::get('/user/edit/{user}', [UserController::class, 'edit']);
    Route::post('/user/update/{user}', [UserController::class, 'update']);
    Route::get('/user/destroy/{user}', [UserController::class, 'destroy']);

    Route::get('/logout', [AuthController::class, 'logout']);
});


Route::get('/', [FrontendController::class, 'index']);
Route::get('/about', [FrontendController::class, 'about']);
Route::get('/contact', [FrontendController::class, 'contact']);
Route::post('/send-contact', [ContactController::class, 'store']);
