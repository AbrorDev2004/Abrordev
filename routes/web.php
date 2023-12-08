<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome',[
        'header' => \App\Models\Header::first(),
        'about' => \App\Models\About::first(),
        'counts' => \App\Models\Count::all(),
        'skills' => \App\Models\Skill::all(),
        'interests' => \App\Models\Interest::all(),
        'testimonials' => \App\Models\Testimonial::all(),
        'resumes' => \App\Models\Resume::all(),
        'services' => \App\Models\Service::all(),
    ]);
});

Route::get('admin/dashboard', function () {
    return view('admin/dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('admin/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('admin/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
    Route::resource('header', \App\Http\Controllers\HeaderController::class);
    Route::resource('about', \App\Http\Controllers\AboutController::class);
    Route::resource('count', \App\Http\Controllers\CountController::class);
    Route::resource('skill', \App\Http\Controllers\SkillController::class);
    Route::resource('interest', \App\Http\Controllers\InterestController::class);
    Route::resource('testimonial', \App\Http\Controllers\TestimonialController::class);
    Route::resource('resume', \App\Http\Controllers\ResumeController::class);
    Route::resource('service', \App\Http\Controllers\ServiceController::class);
    Route::resource('message', \App\Http\Controllers\MessageController::class);
    Route::resource('link', \App\Http\Controllers\LinkController::class);
});

require __DIR__ . '/auth.php';
