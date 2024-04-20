<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogDetailsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\downloadCvController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceDetailsController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\SkillsTypeController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\VisionsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('layouts.Home');
});

// pages:

Route::resource('About', AboutController::class);
Route::resource('Service', ServiceController::class);
Route::resource('Service-details', ServiceDetailsController::class);
Route::resource('Blog', BlogController::class);
Route::resource('Blog-details', BlogDetailsController::class);
Route::resource('Projects', ProjectController::class);
Route::get('/download-cv',[downloadCvController::class,'download'])->name('download.cv');

// page de contact:
Route::get('/inbox',[ContactController::class,'index'])->name('inbox');
Route::resource('contact',ContactController::class);

// Emails:
Route::get('/email', [EmailController::class, 'create']);
Route::post('/email', [EmailController::class, 'sendEmail'])->name('send.email');

// Route::resource('Services', ServiceController::class);

// Pages:
Route::resource('logo',LogoController::class);
Route::resource('feedback',FeedbackController::class);
Route::resource('banners',BannersController::class);
Route::resource('Educations', EducationController::class);
Route::resource('Experiences', ExperienceController::class);
Route::resource('Tags', TagController::class);
Route::resource('Categories', CategoriesController::class);
Route::resource('Skills', SkillsController::class);
Route::resource('Skills-Types', SkillsTypeController::class);
Route::resource('visions', VisionsController::class);



// Middleware:
Route::middleware('auth')->group(function () {
    Route::middleware(['auth', 'role:admin'])->group(function(){
        Route::get('/admin/dashboard',[AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    });
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
