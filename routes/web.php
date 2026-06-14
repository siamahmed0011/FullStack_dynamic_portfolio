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
Route::post('/contact', [PortfolioController::class, 'submitContactForm'])->name('contact.submit');

Route::get('/debug-db-status', function () {
    try {
        \Illuminate\Support\Facades\DB::connection()->getPdo();
        $dbName = \Illuminate\Support\Facades\DB::connection()->getDatabaseName();
        $projectsCount = \App\Models\Project::count();
        $skillsCount = \App\Models\Skill::count();
        $academicsCount = \App\Models\Academic::count();
        
        return response()->json([
            'status' => 'connected',
            'database' => $dbName,
            'host' => env('DB_HOST'),
            'port' => env('DB_PORT'),
            'env' => env('APP_ENV'),
            'projects' => $projectsCount,
            'skills' => $skillsCount,
            'academics' => $academicsCount,
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => $e->getMessage(),
            'host' => env('DB_HOST'),
            'port' => env('DB_PORT'),
            'database' => env('DB_DATABASE'),
        ]);
    }
});
