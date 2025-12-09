<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/academic', [PortfolioController::class, 'academic'])->name('academic');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/skills', [PortfolioController::class, 'skills'])->name('skills');
Route::get('/achievements', [PortfolioController::class, 'achievements'])->name('achievements');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
