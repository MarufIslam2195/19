<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BlogAjaxController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Page Data Controller
Route::get('/heroproperties', [HomeController::class, 'heroProperties']);
Route::get('/aboutMe', [HomeController::class, 'aboutMe']);
Route::get('/socialLink', [HomeController::class, 'socialLink']);
Route::get('/resumeLink', [ResumeController::class, 'resume']);
Route::get('/experences', [ResumeController::class, 'allExperences']);
Route::get('/educations', [ResumeController::class, 'allEducations']);
Route::get('/skills', [ResumeController::class, 'skills']);
Route::get('/languages', [ResumeController::class, 'languages']);
Route::get('/projects', [ProjectController::class, 'projects']);


// Blog Data
Route::get('/blogs', [BlogAjaxController::class, 'sortBlogs']);   // Short Blogs
Route::get('/blogs-details/{id}', [BlogAjaxController::class, 'singleBLog'])->name('blogs');   // Full Blogs
