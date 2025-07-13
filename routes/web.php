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

Route::get('user_data', function () {
    // session helper function
    // session(['user_id' => 1]);

    // facade session class
    // Session::put('user_name', 'mainuddin');

    // return 'Session data set';

    // session er throw te
    // return "user id : " . session('user_id');
    // return "user id : " . session('user_name');

    // facade er throw te
    // return "user Id : " . Session::get('user_name');

    // Session::forget(['user_id', 'user_name']);

    // jodi ami application er shob session delete korar jonno use korte hobe Session::flush()
    Session::flush();
    return "user Id : " . Session::get('user_id') . "User name : " . Session::get('user_name');



});
