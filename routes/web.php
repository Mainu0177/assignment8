<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\contactmeController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/resume', [ResumeController::class, 'index'])->name('resume');
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/contactme', [contactmeController::class, 'index'])->name('contactme');


Route::post('/contact', [ContactController::class, 'FormSubmit'])->name('contact.submit');

