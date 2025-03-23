<?php

use App\Http\Controllers\CertificationController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])
    ->name('home');

Route::get('/experience', [ExperienceController::class, 'experience'])
    ->name('experience');

Route::get('/experience', [ExperienceController::class, 'experience'])
    ->name('experience');

Route::get('/education', [EducationController::class, 'education'])
    ->name('education');

Route::get('/certification', [CertificationController::class, 'certification'])
    ->name('certification');

Route::get('/project', [ProjectController::class, 'project'])
    ->name('project');

Route::get('/skill', [SkillController::class, 'skill'])
    ->name('skill');

Route::get('/organization', [OrganizationController::class, 'organization'])
    ->name('organization');

Route::get('/course', [CourseController::class, 'course'])
    ->name('course');
