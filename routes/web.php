<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PackageController;
// use App\Http\Controllers\TestmonialController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\dashboard\userController;
use App\Http\Controllers\dashboard\adminController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\InterestController;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/service',[ServiceController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::get('/blog',[BlogController::class,'index']);
Route::get('/investments',[InterestController::class,'index']);
// Route::get('/testmonials',[TestmonialController::class,'index']);
Route::get('/visa',[PostController::class,'index']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Route for displaying the login form (GET request)
Route::get('/signin', [LoginController::class, 'showLoginForm'])->name('login');
// Route for handling the login form submission (POST request)
Route::post('/signin', [LoginController::class, 'login'])->name('login.submit');
// Route for displaying the registration form
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route for handling the registration form submission
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/consult-us/{image}', [ConsultationController::class, 'showForm'])->name('consultationform');
// Route::get('/consult-us', [ConsultationController::class, 'showForm'])->name('consultationform');
Route::post('/consult-us', [ConsultationController::class, 'requestConsultation'])->name('consultation.request');
Route::get('/testmonials', [TestimonialController::class, 'index'])->name('testimonials.index');
Route::post('/interests', [InterestController::class, 'store'])->name('interests.store');

Route::middleware(['auth'])->group(function () {
     Route::get('/dashboard', [userController::class, 'index'])->name('user.home');
    Route::get('/dashboard/admindashboard', [adminController::class, 'index'])->name('admin.home');
    // Route::get('/dashboard', [userController::class, 'index'])->name('user.home');
    // Route::get('/dashboard/admindashboard', [adminController::class, 'index'])->name('admin.home');
    Route::get('/tour/create', [TourController::class, 'create'])->name('tour.create');
    Route::post('/tour', [TourController::class, 'store'])->name('tour.store');
    Route::get('/team/create', [TeamController::class, 'create'])->name('team.create');
    Route::post('/team/store', [TeamController::class, 'store'])->name('team.store');
    Route::get('/consultations', [ConsultationController::class, 'index'])->name('consultations.list');
    
    Route::get('/testimonial/create', [TestimonialController::class, 'create'])->name('testimonial.create');
    Route::post('/testimonial/store', [TestimonialController::class, 'store'])->name('testimonial.store');
    Route::delete('/testimonial/destroy/{id}', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');
    Route::get('/testimonials/manage', [TestimonialController::class, 'manage'])->name('testimonials.manage');
    
     Route::get('/blogs/view', [BlogController::class, 'homeland'])->name('blogs.home');
     Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
     Route::post('/blogs/store', [BlogController::class, 'store'])->name('blogs.store');
     Route::delete('blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');

     Route::get('/posts/views', [TourController::class, 'index'])->name('tours.index');
     Route::delete('/tour/{tour}', [TourController::class, 'destroy'])->name('tour.destroy');

     Route::get('/admin/investment', [InterestController::class, 'dashboard'])->name('admin.investment');
     Route::delete('/interests/{interest}', [InterestController::class, 'destroy'])->name('interests.destroy');

});