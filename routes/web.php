<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\infosController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DesignsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VisionsController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ProtfolioController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\downloadCvController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SkillsTypeController;
use App\Http\Controllers\BlogDetailsController;
use App\Http\Controllers\ServiceVisionController;
use App\Http\Controllers\VideoCategoryController;
use App\Http\Controllers\DesignCategoryController;
use App\Http\Controllers\ServiceDetailsController;
use App\Http\Controllers\ArticleCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home page
Route::get('/',[HomeController::class,'index'])->name('home')->middleware('Visit');

// pages:

Route::get('About', [AboutController::class, 'index'])->name('About');
Route::get('Our-services', [ServiceController::class,'affichage'])->name('Our-services');
Route::resource('Service-details', ServiceDetailsController::class);
Route::resource('Service-vision', ServiceVisionController::class);
Route::get('Blog', [BlogController::class, 'index'])->name('Blog');
Route::get('Design_all',[DesignsController::class, 'Affichage'])->name('Design_all');
Route::get('Designs/{id}',[DesignsController::class, 'filter'])->name('filter_Design');
Route::get('Video_all',[VideosController::class, 'Affichage'])->name('Video_all');
Route::get('Videos/{id}',[VideosController::class, 'filter'])->name('filter_Video');
Route::get('Projects', [ProjectController::class , 'index'])->name('Projects');
Route::get('/Projects/{id}', [ProjectController::class, 'filter'])->name('filter');
Route::get('/download-cv',[downloadCvController::class,'download'])->name('download.cv');
Route::get('create', [VideosController::class,'create'])->name('create');

// page de contact:
Route::get('/inbox',[ContactController::class,'index'])->name('inbox');
Route::resource('contact',ContactController::class);

// Emails:
Route::get('/email', [EmailController::class, 'create']);
Route::post('/email', [EmailController::class, 'sendEmail'])->name('send.email');

// Route::resource('Services', ServiceController::class);

// Pages:
Route::resource('logo',LogoController::class);
Route::resource('infos',infosController ::class);
Route::resource('feedback',FeedbackController::class);
Route::resource('banners',BannersController::class);
Route::resource('Educations', EducationController::class);
Route::resource('Experiences', ExperienceController::class);
Route::resource('Tags', TagController::class);
Route::resource('Categories', CategoriesController::class);
Route::resource('Skills', SkillsController::class);
Route::resource('Skills-Types', SkillsTypeController::class);
Route::resource('Articles', ArticleController::class);
Route::resource('Protfolios',ProtfolioController::class);
Route::resource('DesignCategory',DesignCategoryController::class);
Route::resource('VideoCategory',VideoCategoryController::class);
Route::resource('ArticleCategory',ArticleCategoryController::class);
Route::resource('Protfolios',ProtfolioController::class);
Route::resource('Service', ServiceController::class);
Route::resource('Newsletters', NewsletterController::class);
Route::resource('Members', MemberController::class);
Route::resource('Designs', DesignsController::class);
Route::resource('Videos', VideosController::class);





// Middleware:
Route::middleware('auth')->group(function () {
    Route::middleware(['auth', 'role:admin'])->group(function(){
        Route::get('/admin/dashboard',[AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
        Route::get('/visit-chart-data', [AdminController::class, 'getVisitChartData'])->name('visit-chart-data');
    });
});





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/delete-user', [ProfileController::class, 'delete_user'])->name('delete_user');
    Route::get('/update-password', [ProfileController::class, 'update_password'])->name('update_password');
    Route::get('/profile-details', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
