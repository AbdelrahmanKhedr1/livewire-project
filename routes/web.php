<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SkillsController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Livewire::setUpdateRoute(function ($handle) {
    return Route::post('livewire-project/public/livewire/update', $handle);
});

Route::prefix('/')->name('front.')->group(function () {
    Route::get('/', [FrontController::class, 'index'])->name('home');
    Route::get('/about', [FrontController::class, 'about'])->name('about');
    Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
    Route::get('/project', [FrontController::class, 'project'])->name('project');
    Route::get('/service', [FrontController::class, 'service'])->name('service');
    Route::get('/team', [FrontController::class, 'team'])->name('team');
    Route::get('/teatimonial', [FrontController::class, 'teatimonial'])->name('teatimonial');
});

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::middleware('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('dashboard');
        Route::get('/setting', [AdminController::class, 'setting'])->name('setting');
        Route::get('/skills', [AdminController::class, 'skills'])->name('skills');
        Route::get('/subscriber', [AdminController::class, 'subscriber'])->name('subscriber');
        Route::get('/counters', [AdminController::class, 'counters'])->name('counters');
        Route::get('/services', [AdminController::class, 'services'])->name('services');
        Route::get('/messages', [AdminController::class, 'messages'])->name('messages');
    });

    Route::get('/login', [AdminController::class, 'login'])->middleware('guest:admin')->name('login');

});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
