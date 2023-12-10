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
        'portfolios' => \App\Models\Portfolio::all(),
        'categories' => \App\Models\Category::all(),
        'social_links' => \App\Models\SocialLink::all(),
    ]);
});

Route::get('/portfolio-details/{id}', function ($id) {
    return view('portfolio-details',[
        'header' => \App\Models\Header::first(),
        'portfolio' => \App\Models\Portfolio::find($id)
    ]);
})->name('portfolio-details');


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
    Route::resource('link', \App\Http\Controllers\LinkController::class);
    Route::resource('category', \App\Http\Controllers\CategoryController::class);
    Route::resource('portfolio', \App\Http\Controllers\PortfolioController::class);
    Route::resource('portfolio-pic', \App\Http\Controllers\PortfolioPicController::class);

    // message
    // Route::get('message', [\App\Http\Controllers\MessageController::class, 'index'])->name('message.index');
    // Route::get('message/{id}', [\App\Http\Controllers\MessageController::class, 'show'])->name('message.show');
    // Route::delete('message/{id}', [\App\Http\Controllers\MessageController::class, 'destroy'])->name('message.destroy');
});

Route::post('/message', [\App\Http\Controllers\MessageController::class, 'store'])->name('message.store');

require __DIR__ . '/auth.php';
